<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kasir_model');
    }

    public function index()
    {
        $data['judul'] = 'Kasir';
        $data['tb_barang'] = $this->Kasir_model->getAlltb_barang();
        $data['list_keranjang'] = $this->Kasir_model->list_keranjang();
        $this->load->view('layout/header', $data);
        $this->load->view('kasir/kasir_V', $data);
        $this->load->view('layout/footer');
    }

    public function insert_keranjang()
    {
        $data['insert_keranjang'] = $this->Kasir_model->insert_keranjang();
        redirect('kasir');
    }
}
