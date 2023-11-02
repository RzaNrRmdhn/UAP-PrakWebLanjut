<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function index()
    {
        
    }

    public function sign_in()
    {
        return view('customer/auth/sign_in');
    }

    public function forgot_password()
    {
        return view('customer/auth/forgot_password');
    }
}
