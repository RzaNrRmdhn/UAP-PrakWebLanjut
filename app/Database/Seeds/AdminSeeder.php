<?php

namespace App\Database\Seeds;
use App\Models\AdminModel;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $AdminModel = new adminModel();

        $AdminModel->save([
            'email' => 'lucaswong@gmail.com',
            'username' => 'lucas', 
            'password' => '2323',
            'roles' => 'admin',
        ]);

    }
}
