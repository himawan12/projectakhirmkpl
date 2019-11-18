<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recordservices extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("service_record_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["recordservices"] = $this->service_record_model->getAll();
        $this->load->view("admin/recordservice/list", $data);
    }

    public function add()
    {
        $recordservice = $this->service_record_model;
        $validation = $this->form_validation;
        $validation->set_rules($recordservice->rules());

        if ($validation->run()) {
            $recordservice->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/recordservice/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/recordservices');
       
        $recordservice = $this->service_record_model;
        $validation = $this->form_validation;
        $validation->set_rules($recordservice->rules());

        if ($validation->run()) {
            $recordservice->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["recordservice"] = $recordservice->getById($id);
        if (!$data["recordservice"]) show_404();
        
        $this->load->view("admin/recordservice/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->service_record_model->delete($id)) {
            redirect(site_url('admin/recordservices'));
        }
    }
}