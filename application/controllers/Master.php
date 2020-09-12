<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('master/master_v');
        $this->load->view('layout/footer');
    }
}
