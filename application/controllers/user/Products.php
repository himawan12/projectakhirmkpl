<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model_user");
        //$this->load->library('form_validation');
    }

    public function index()
    {
        $data["products"] = $this->product_model_user->getAll();
        $this->load->view("user/product/list", $data);
    }
}
