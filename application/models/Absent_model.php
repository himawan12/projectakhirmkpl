<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Absent_model extends CI_Model
{
    private $_table = "absensi";

    public $id_absensi;
    public $tanggal;
    public $tidak_hadir;

    public function rules()
    {
        return [
            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'],

            ['field' => 'tidak_hadir',
            'label' => 'Tidak Hadir',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_absensi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_absensi = uniqid();
        $this->tanggal = $post["tanggal"];
        $this->tidak_hadir = $post["tidak_hadir"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_absensi = $post["id"];
        $this->tanggal = $post["tanggal"];
        $this->tidak_hadir = $post["tidak_hadir"];
        $this->db->update($this->_table, $this, array('id_absensi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_absensi" => $id));
    }
}