<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'bukti_pembayaran' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'delete_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan', true);
    }
}
