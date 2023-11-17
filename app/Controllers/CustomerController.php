<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    public function index()
    {
        
    }

    public function landingpage(){
        return view('customer/home/landing_page');
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
        $customerModel = new CustomerModel();
        $barang = $customerModel->getBarang();
        
        $data = [
            'barang' => $barang
        ];

        return view('customer/home/dashboard', $data);
    }

    public function shoes(){
        $customerModel = new CustomerModel();
        $barang = $customerModel->getBarang();
        
        $data = [
            'barang' => $barang
        ];
        return view('customer/home/shoes', $data);
    }

    public function grade(){
        $customerModel = new CustomerModel();
        $barang = $customerModel->getBarang();
        
        $data = [
            'barang' => $barang
        ];
        return view('customer/home/grade', $data);
    }
}
