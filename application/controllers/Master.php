<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Master';
        $this->load->view('layout/header', $data);
        $this->load->view('master/master_v');
        $this->load->view('layout/footer');
    }
}
