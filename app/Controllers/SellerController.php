<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SellerController extends BaseController
{
    public function index()
    {
        //
    }

    public function registerPenjual(){
        return view('seller/auth/register_penjual');
    }
}
