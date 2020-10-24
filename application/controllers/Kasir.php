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
        $data['pegawai'] = $this->session->userdata('nama');
        $data['tb_barang'] = $this->Kasir_model->getAlltb_barang();
        $data['list_keranjang'] = $this->Kasir_model->list_keranjang();
        $data['jumlah'] = $this->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('kasir/kasir_V', $data);
        $this->load->view('layout/footer');
    }

    public function insert_keranjang()
    {
        $data['insert_keranjang'] = $this->Kasir_model->insert_keranjang();
        redirect('kasir');
    }

    public function jumlah()
    {
        $id_pegawai = $this->session->userdata('id_pegawai');
        $this->db->select_sum('total_harga');
        $query = $this->db->get_where('tb_penjualan_detail', ['id_pegawai' => $id_pegawai, 'status' => 'keranjang'])->row_array();
        return $query;
    }

    public function checkout()
    {
        $this->Kasir_model->checkout();
        redirect('Kasir');
    }
}
