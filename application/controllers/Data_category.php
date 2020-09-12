<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_category extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Category';
        $this->load->view('layout/header', $data);
        $this->load->view('data_category/data_category_v');
        $this->load->view('layout/footer');
    }
}
