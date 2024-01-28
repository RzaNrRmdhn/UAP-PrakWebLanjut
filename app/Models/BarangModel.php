<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_barang', 'harga_barang', 'id_kategori', 'image', 'deskripsi_barang', 'grade'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getBarang($id = null)
    {
        if ($id != null) {
            return $this->select('barang.*, kategori_barang.nama_kategori')->join('kategori_barang', 'kategori_barang.id=barang.id')->find($id);
            // return $this->db->table('barang')->where('id', $id)->get()->getResultArray();
        }
        return $this->select('barang.*, kategori_barang.nama_kategori')->join('kategori_barang', 'kategori_barang.id=kategori_barang.id')->findAll();
    }

    public function saveBarang($data)
    {
        $this->insert($data);
    }
}
