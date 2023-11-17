<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class CustomerController extends BaseController
{
    public function index()
    {
        
    }

    public function landingpage(){
        if (logged_in()) {
            if(in_groups('penjual')){
                dd("ini halaman penjual");
            }else if(in_groups('pembeli')){
                return view('customer/profile/profile_pembeli');
            }
        }else{
        return view('customer/home/landing_page');
        }
    }

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
        return view('customer/profile/profile_pembeli');
    }
  
    public function homescreen(){
        return view('customer/home/dashboard');
    }

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
}
