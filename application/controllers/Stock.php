<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stock_model');
    }
    public function index()
    {
        $data['judul'] = 'Stock';
        $data['tb_barang'] = $this->Stock_model->getAlltb_barang();
        $this->load->view('layout/header', $data);
        $this->load->view('stock/stock_v', $data);
        $this->load->view('layout/footer');
    }
}
