<?php

namespace App\Database\Seeds;
use App\Models\CustomerModel;
use CodeIgniter\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $CustomerModel = new customerModel();

        $CustomerModel->save([
            'email' => 'jenotama@gmail.com',
            'username' => 'Jeno Pratama', 
            'password' => '4545',
            'roles' => 'customer',
        ]);
    }
}
