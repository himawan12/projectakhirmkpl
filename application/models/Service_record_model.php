<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_record_model extends CI_Model
{
    private $_table = "recordjasa";

    public $id_recordjasa;
    public $nama_jasa;
    public $harga_jasa;
    public $nama_konsumen;
    public $dikerjakan_oleh;
    public $tanggal;
    public $jam;

    public function rules()
    {
        return [
            ['field' => 'nama_jasa',
            'label' => 'Nama Jasa',
            'rules' => 'required'],

            ['field' => 'harga_jasa',
            'label' => 'Harga Jasa',
            'rules' => 'numeric'],
            
            ['field' => 'nama_konsumen',
            'label' => 'Nama Konsumen',
            'rules' => 'required'],

            ['field' => 'dikerjakan_oleh',
            'label' => 'Dikerjakan oleh',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'],

            ['field' => 'jam',
            'label' => 'Jam',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_recordjasa" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_recordjasa = uniqid();
        $this->nama_jasa = $post["nama_jasa"];
        $this->harga_jasa = $post["harga_jasa"];
        $this->nama_konsumen = $post["nama_konsumen"];
        $this->dikerjakan_oleh = $post["dikerjakan_oleh"];
        $this->tanggal = $post["tanggal"];
        $this->jam = $post["jam"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_recordjasa = $post["id"];
        $this->nama_jasa = $post["nama_jasa"];
        $this->harga_jasa = $post["harga_jasa"];
        $this->nama_konsumen = $post["nama_konsumen"];
        $this->dikerjakan_oleh = $post["dikerjakan_oleh"];
        $this->tanggal = $post["tanggal"];
        $this->jam = $post["jam"];
        $this->db->update($this->_table, $this, array('id_recordjasa' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_recordjasa" => $id));
    }
}