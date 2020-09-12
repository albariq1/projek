<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Data Barang';
        $this->load->view('layout/header', $data);
        $this->load->view('data_barang/data_barang_v');
        $this->load->view('layout/footer');
    }
}
