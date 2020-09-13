<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Barang';
        $data['tb_barang'] = $this->Data_barang_model->getAlltb_barang();
        $this->load->view('layout/header', $data);
        $this->load->view('data_barang/data_barang_v', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'tambah data';
        $data['tb_barang'] = $this->Data_barang_model->getAlltb_barang();

        $this->form_validation->set_rules('barcode', 'Barcode', 'required|numeric');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
        $this->form_validation->set_rules('harga_beli', 'Harga beli', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'Harga jual', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('data_barang/tambah_data_barang_v');
            $this->load->view('layout/footer');
        } else {
            $this->Data_barang_model->tambah_data_barang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('data_barang');
        }
    }

    public function hapus($id)
    {

        $this->Data_barang_model->hapus_data_barang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Data_barang');
    }
    public function ubah($id)
    {

        $data['judul'] = 'ubah data';
        $data['tb_barang'] = $this->Data_barang_model->get_data_barang($id);

        $this->form_validation->set_rules('barcode', 'Barcode', 'required|numeric');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
        $this->form_validation->set_rules('harga_beli', 'Harga beli', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'Harga jual', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('data_barang/ubah_data_barang_v', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Data_barang_model->ubah_data_barang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('data_barang');
        }
    }
}
