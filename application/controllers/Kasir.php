<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('kasir/kasir_V');
        $this->load->view('layout/footer');
    }
}
