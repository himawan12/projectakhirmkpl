<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("service_model_user");
        //$this->load->library('form_validation');
    }

    public function index()
    {
        $data["services"] = $this->service_model_user->getAll();
        $this->load->view("user/service/list", $data);
    }
}