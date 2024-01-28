<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_barang', 'nama_barang', 'Total', 'bukti_pembayaran', 'status', 'id_akun'];

    // Dates
    protected $useTimestamps = false;
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

    public function savePesanan($data)
    {
        $this->insert($data);
    }

    public function getPesan($id = null)
    {
        if ($id != null) {
            return $this->select('pesanan.*')->find($id);
        }
        return $this->findAll();
    }

    public function getPesanan($id = null)
    {
        if ($id != null) {
            return $this->db->table('pesanan')->where('id_akun', $id)->get()->getResultArray();
            // return $this->select('pesanan.*, barang.nama_barang, barang.harga_barang, barang.image, barang.grade, barang.deskripsi_barang, kategori_barang.nama_kategori')->join('barang', 'barang.id=pesanan.id_barang')->join('kategori_barang', 'kategori_barang.id=barang.id_kategori')->find($id);
        }
        return $this->select('pesanan.*, barang.nama_barang, barang.harga_barang, barang.image, barang.grade, barang.deskripsi_barang, kategori_barang.nama_kategori')->join('barang', 'barang.id=pesanan.id_barang')->join('kategori_barang', 'kategori_barang.id=barang.id_kategori')->findAll();
    }

    public function getPesananById($id = null)
    {
        if ($id != null) {
            return $this->db->table('pesanan')->where('id', $id)->get()->getResultArray();
            // return $this->select('pesanan.*, barang.nama_barang, barang.harga_barang, barang.image, barang.grade, barang.deskripsi_barang, kategori_barang.nama_kategori')->join('barang', 'barang.id=pesanan.id_barang')->join('kategori_barang', 'kategori_barang.id=barang.id_kategori')->find($id);
        }
        return $this->select('pesanan.*, barang.nama_barang, barang.harga_barang, barang.image, barang.grade, barang.deskripsi_barang, kategori_barang.nama_kategori')->join('barang', 'barang.id=pesanan.id_barang')->join('kategori_barang', 'kategori_barang.id=barang.id_kategori')->findAll();
    }

    public function updatePesanan($data, $id)
    {
        return $this->update($id, $data);
    }
}
