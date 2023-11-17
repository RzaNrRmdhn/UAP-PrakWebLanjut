<?php

namespace App\Database\Seeds;

use App\Models\CustomerModel;
use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $customerModel = new CustomerModel();
        
        $customerModel->save([
            'nama_barang' => 'Sepatu',
            'harga_barang' => '100000',
            'id_kategori' => '1',
            'image' => 'http://localhost:8080/assets/uploads/img/1698510424_81fb70141728d94fd52e.jpg',
        ]);
        $customerModel->save([
            'nama_barang' => 'Baju',
            'harga_barang' => '100000',
            'id_kategori' => '2',
            'image' => 'http://localhost:8080/assets/uploads/img/1698510424_81fb70141728d94fd52e.jpg',
        ]);
    }
}
