<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class SellerController extends BaseController
{
    public $barangModel;
    protected $helpers=['form'];
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    } 
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

    public function store(){

        $status = "Waiting";
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();
        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        $this->barangModel->saveBarang([
            'nama_barang' => $this->request->getVar('nama'),
            'harga_barang' => $this->request->getVar('harga'),
            'id_kategori' => $this->request->getVar('kategori'),
            'deskripsi_barang' => $this->request->getVar('about'),
            'image' => $foto,
            'status' => $this->request->getVar('status'),
        ]);
        
        return redirect()->to('/customer/home');
    }
}
