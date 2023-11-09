<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        return view('customer/auth/sign_in');
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
}
