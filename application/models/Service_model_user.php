<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model_user extends CI_Model
{
    private $_table = "jasa";

    public $id_jasa;
    public $nama_jasa;
    public $image = "default.jpg";
    public $harga_jasa;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'nama_jasa',
            'label' => 'Nama Jasa',
            'rules' => 'required'],

            ['field' => 'harga_jasa',
            'label' => 'Harga Jasa',
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
        return $this->db->get_where($this->_table, ["id_jasa" => $id])->row();
    }
}