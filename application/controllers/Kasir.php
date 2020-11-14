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
        $data['nama'] = $this->Kasir_model->getAlltb_pegawai();
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
        $random = random_string('alnum', 15);
        $data = [
            "id_penjualan" => $random,
            "id_pegawai" => $this->session->userdata('id_pegawai'),
            "total_belanja" => $this->input->post('total_harga', true),
            "total_bayar" => $this->input->post('total_bayar', true),
            "kembalian" => $this->input->post('kembalian', true),
            "tgl_penjualan" => date('Y-m-d'),
            "waktu" => date('H:i:s'),
        ];
        $this->db->insert('tb_penjualan', $data);

        $id_barang = $this->input->post('id_barang');

        foreach ($id_barang as $key => $value) {

            $checkout[] = array(
                "id_barang" => $id_barang[$key],
                "id_penjualan" => $random,
                "status" => 'checkout',
            );
        }
        $this->db->where('status', 'keranjang');
        $this->db->update_batch('tb_penjualan_detail', $checkout, 'id_barang');
        redirect('Struk/list/' . $random);
    }
}
