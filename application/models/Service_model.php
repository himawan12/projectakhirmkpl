<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{
    private $_table = "jasa";

    public $id_jasa;
    public $nama_jasa;
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

    public function save()
    {
        $post = $this->input->post();
        $this->id_jasa = uniqid();
        $this->nama_jasa = $post["nama_jasa"];
        $this->harga_jasa = $post["harga_jasa"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jasa = $post["id"];
        $this->nama_jasa = $post["nama_jasa"];
        $this->harga_jasa = $post["harga_jasa"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_jasa' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jasa" => $id));
    }
}