<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\UsersModel;

use App\Models\CustomerModel;
use App\Models\PesananModel;

class CustomerController extends BaseController
{
    public function index()
    {
    }

    public function landingpage()
    {
        if (logged_in()) {
            if (in_groups('admin')) {
                $pesananModel = new PesananModel();
                $pesanan = $pesananModel->getPesanan();
                $data = [
                    'pesanan' => $pesanan
                ];
                return view('admin/home/dashboard', $data);
            } else if (in_groups('customer')) {
                $customerModel = new CustomerModel();
                $barang = $customerModel->getBarang();

                $data = [
                    'barang' => $barang
                ];
                return view('customer/home/dashboard', $data);
            } else {
                $customerModel = new CustomerModel();
                $barang = $customerModel->getBarang();

                $data = [
                    'barang' => $barang
                ];
                return view('customer/home/dashboard', $data);
            }
        } else {
            return view('customer/home/landing_page');
        }
    }
    // public function landingpage(){
    //     return view('customer/home/landing_page');
    // }

    public function sign_in()
    {
        return view('customer/auth/login_pembeli');
    }

    public function forgot_password()
    {
        return view('customer/auth/forgot_password');
    }

    public function registerPembeli(): string
    {
        return view('customer/auth/register_pembeli');
    }

    public function profilePembeli(): string
    {
        if (logged_in()) {
            if (in_groups('penjual')) {
                dd("ini halaman penjual");
            } else if (in_groups('seller')) {
                return view('customer/profile/profile_seller');
            } else {
                return view('customer/profile/profile_pembeli');
            }
        } else {
            return view('customer/home/landing_page');
        }
    }
    public function homescreen()
    {
        $customerModel = new CustomerModel();
        $barang = $customerModel->getBarang();

        $data = [
            'barang' => $barang
        ];

        return view('customer/home/dashboard', $data);
    }

    public function category_barang($id)
    {
        $customerModel = new CustomerModel();
        $barang = $customerModel->getBarangByCategory($id);

        $data = [
            'barang' => $barang
        ];
        return view('customer/home/category', $data);
    }

    // public function grade()
    // {
    //     $customerModel = new CustomerModel();
    //     $barang = $customerModel->getBarang();

    //     $data = [
    //         'barang' => $barang
    //     ];
    //     return view('customer/home/grade', $data);
    // }

    public function updateProfile($id): string
    {
        $userModel = new UsersModel();
        $user = $userModel->getUser($id);
        $data = [
            'title' => 'Edit User',
            'user' => $user,
        ];
        return view('customer/profile/update_profile', $data);
    }

    public function update($id)
    {
        $userModel = new UsersModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        $result = $userModel->updateUser($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/'));
    }

    public function detail_product($id)
    {
        $barangModel = new BarangModel();
        $barang = $barangModel->getBarang($id);

        $data = [
            'barang' => $barang
        ];
        // dd($data);

        return view('customer/home/detail_product', $data);
    }

    public function beli_barang()
    {
        $auth = service('authentication');
        $status = "Waiting";

        if ($auth->check()) {
            $userId = $auth->id();
            $pesananModel = new PesananModel();
            $pesananModel->savePesanan([
                'id_barang' => $this->request->getVar('id'),
                'nama_barang' => $this->request->getVar('nama'),
                'Total' => $this->request->getVar('harga'),
                'status' => $status,
                'id_akun' => $userId
            ]);
            return redirect()->to('/customer/home');
        } else {
            return redirect()->to('/customer/home');
        }
    }

    public function transaksi(): string
    {
        $auth = service('authentication');
        if ($auth->check()) {
            $userId = $auth->id();
            $pesananModel = new PesananModel();
            $pesanan = $pesananModel->getPesanan($userId);
            $data = [
                'pesanan' => $pesanan
            ];
            return view('customer/home/transaksi', $data);
        }

        // $userId = $auth->id();
        // $pesananModel = new PesananModel();
        // $pesanan = $pesananModel->getPesanan($userId);
        // $data = [
        //     'pesanan' => $pesanan
        // ];


        // return view('customer/home/transaksi', $data);
    }

    public function edit($id)
    {
        $pesananModel = new PesananModel();
        $pesanan = $pesananModel->getPesan($id);

        $data = [
            'pesanan' => $pesanan
        ];
        // dd($data);
        return view('customer/home/edit', $data);
    }

    public function updatePesanan($id)
    {
        $barangModel = new PesananModel();
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        if ($foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);

                $data['bukti_pembayaran'] = $foto_path;
            }
        }

        $result = $barangModel->updatePesanan($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/customer/home'));
    }
}
