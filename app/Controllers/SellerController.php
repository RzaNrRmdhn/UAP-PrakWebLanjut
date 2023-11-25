<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SellerController extends BaseController
{
    public function index()
    {
        //
    }

    public function registerPenjual(): string
    {
        return view('seller/auth/register_penjual');
    }

    public function upload_barang(): string
    {
        return view('seller/home/upload_barang');
    }
}
