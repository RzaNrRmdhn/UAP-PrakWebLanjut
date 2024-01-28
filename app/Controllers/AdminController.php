<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CustomerModel;
use App\Models\SellerModel;
use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\UsersModel;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function dashboard()
    {
        $pesananModel = new PesananModel();
        $pesanan = $pesananModel->getPesanan();
        $data = [
            'pesanan' => $pesanan
        ];
        return view('admin/home/dashboard', $data);
    }

    public function list_admin()
    {
        $user = 'seller';
        $userModel = new UsersModel();
        $data = [
            'Admin' => $userModel->getUserSeller(),
        ];
        return view('admin/home/list_admin', $data);
    }
    public function list_seller()
    {
        $SellerModel = new sellerModel();
        $data = [
            'Seller' => $SellerModel->getseller(),

        ];
        return view('admin/home/list_seller', $data);
    }
    public function list_customer()
    {
        $CustomerModel = new customerModel();
        $data = [
            'Customer' => $CustomerModel->getcustomer(),

        ];
        return view('admin/home/list_customer', $data);
    }
    public function admin_profile()
    {
        return view('admin/home/admin_profile');
    }
    public function create_admin()
    {
        return view('admin/home/create_admin');
    }

    public function store()
    {
        $AdminModel = new AdminModel();

        $AdminModel->saveadmin([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('name'),
            'password' => $this->request->getVar('password'),
            'roles' => $this->request->getVar('roles'),
        ]);

        // Ambil kembali daftar data admin yang diperbarui
        $data = [
            'Admin' => $AdminModel->getadmin(),
        ];

        // Tampilkan halaman list_admin dengan data terbaru
        return view('admin/home/list_admin', $data);
    }

    public function update($id)
    {
        $pesananModel = new PesananModel();
        $status = 'Accepted';
        $pesananModel->update($id, [
            'status' => $status,
        ]);
        return redirect()->to('/admin/dashboard');
    }
}
