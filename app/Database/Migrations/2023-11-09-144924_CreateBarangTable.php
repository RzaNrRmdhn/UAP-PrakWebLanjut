<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga_barang' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi_barang' => [
                'type' => 'TEXT',
            ],
            'grade' => [
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
        $this->forge->addForeignKey('id_kategori', 'kategori_barang', 'id');
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang', true);
    }
}
