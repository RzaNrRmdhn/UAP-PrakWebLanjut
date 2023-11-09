<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function dashboard(){
        return view('admin/home/dashboard');
    }
    public function list_admin(){
        return view('admin/home/list_admin');
    }
    public function list_seller(){
        return view('admin/home/list_seller');
    }
    public function list_customer(){
        return view('admin/home/list_customer');
    }
    public function admin_profile(){
        return view('admin/home/admin_profile');
    }
  
}
