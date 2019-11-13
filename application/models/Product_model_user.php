<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model_user extends CI_Model
{
    private $_table = "produk";

    public $id_produk;
    public $nama_produk;
    public $image = "default.jpg";
    public $kategori;
    public $harga_produk;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'nama_produk',
            'label' => 'Nama Produk',
            'rules' => 'required'],

            ['field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'harga_produk',
            'label' => 'Harga Produk',
            'rules' => 'numeric'],
            
            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }
}