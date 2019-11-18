<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("absent_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["absents"] = $this->absent_model->getAll();
        $this->load->view("admin/absent/list", $data);
    }

    public function add()
    {
        $absent = $this->absent_model;
        $validation = $this->form_validation;
        $validation->set_rules($absent->rules());

        if ($validation->run()) {
            $absent->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/absent/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/absents');
       
        $absent = $this->absent_model;
        $validation = $this->form_validation;
        $validation->set_rules($absent->rules());

        if ($validation->run()) {
            $absent->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["absent"] = $absent->getById($id);
        if (!$data["absent"]) show_404();
        
        $this->load->view("admin/absent/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->absent_model->delete($id)) {
            redirect(site_url('admin/absents'));
        }
    }
}
