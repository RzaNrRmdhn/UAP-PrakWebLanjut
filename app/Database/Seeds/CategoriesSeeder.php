<?php

namespace App\Database\Seeds;

use App\Models\SellerModel;
use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $customerModel = new SellerModel();
        
        $customerModel->save([
            'nama_kategori' => 'Sepatu',
        ]);
        $customerModel->save([
            'nama_kategori' => 'Baju',
        ]);
    }
}
