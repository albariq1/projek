<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Kasir';
        $this->load->view('layout/header', $data);
        $this->load->view('kasir/kasir_V');
        $this->load->view('layout/footer');
    }
}
