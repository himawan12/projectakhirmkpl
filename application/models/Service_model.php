<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
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

    public function save()
    {
        $post = $this->input->post();
        $this->id_jasa = uniqid();
        $this->nama_jasa = $post["nama_jasa"];
        $this->image = $this->_uploadImage();
        $this->harga_jasa = $post["harga_jasa"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jasa = $post["id"];
        $this->nama_jasa = $post["nama_jasa"];
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } 
        else {
            $this->image = $post["old_image"];
        }

        $this->harga_jasa = $post["harga_jasa"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_jasa' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_jasa" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/service/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_jasa;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $service = $this->getById($id);
        if ($service->image != "default.jpg") {
            $filename = explode(".", $service->image)[0];
            return array_map('unlink', glob(FCPATH."upload/service/$filename.*"));
        }
    }
}