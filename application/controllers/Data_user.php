<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'User';
        $this->load->view('layout/header', $data);
        $this->load->view('data_user/data_user_v');
        $this->load->view('layout/footer');
    }
}
