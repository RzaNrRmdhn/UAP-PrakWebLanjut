<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatus extends Migration
{
    public function up()
    {
        $this->forge->addColumn('barang', [
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('barang', ['status']);
    }
}
