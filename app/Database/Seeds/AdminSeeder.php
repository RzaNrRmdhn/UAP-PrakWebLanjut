<?php

namespace App\Database\Seeds;

use App\Models\CustomerModel;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $customerModel = new CustomerModel();
        
        $customerModel->save([
            'email' => 'reza.nur.nur@gmail.com',
            'username' => 'Friday',
            'fullname' => 'FridayRain',
            'password_hash' => 'Friday123',
        ]);
    }
}
