<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function registerPembeli(): string
    {
        return view('register_pembeli');
    }

    public function registerPenjual(): string
    {
        return view('register_penjual');

    public function landingpage(){
        return view('landingpage');
    }
}
