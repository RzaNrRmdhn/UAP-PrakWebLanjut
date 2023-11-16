<?php

namespace App\Database\Seeds;
use App\Models\SellerModel;
use CodeIgniter\Database\Seeder;

class SellerSeeder extends Seeder
{
    public function run()
    {
        $SellerModel = new sellerModel();

        $SellerModel->save([
            'email' => 'steven211@gmail.com',
            'username' => 'Steven Nuri', 
            'password' => '5511',
            'roles' => 'seller',
        ]);
    }
}
