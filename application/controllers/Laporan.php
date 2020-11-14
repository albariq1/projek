<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
    }
    public function index()
    {
        $tanggal = $this->input->post('date');
        $data['tgl'] = $tanggal;
        $data['karyawan'] = $this->Laporan_model->getAlltb_karyawan();
        $data['tb_penjualan_detail'] = $this->Laporan_model->getAlltb_penjualan_detail();
        $data['tb_penjualan'] = $this->Laporan_model->getAlltb_penjualan();
        $data['jumlah'] = $this->Laporan_model->total_belanja($tanggal);
        $data['modal'] = $this->Laporan_model->total_modal($tanggal);
        // var_dump($data['modal']);
        // die;
        // var_dump($data['jumlah'][0]['total_belanja']);
        // die;
        $data['judul'] = 'Laporan';
        $this->load->view('layout/header', $data);
        $this->load->view('laporan/laporan_v');
        $this->load->view('layout/footer');
    }
    public function karyawan()
    {
        $data['judul'] = 'Karyawan';
        $nama = $this->input->post('nama_karyawan');
        $data['karyawan'] = $this->Laporan_model->getAlltb_karyawan();
        $data['total_karyawan'] = $this->Laporan_model->total_karyawan($nama);
        $data['modal_karyawan'] = $this->Laporan_model->total_modal_karyawan($nama);
        $this->load->view('layout/header', $data);
        $this->load->view('laporan/Karyawan_v');
        $this->load->view('layout/footer');
    }
    public function bulan()
    {
        $data['judul'] = 'bulan';
        $data['total_bulan'] = $this->Laporan_model->total_bulan();
        $data['modal_bulan'] = $this->Laporan_model->total_modal_bulan();
        $this->load->view('layout/header', $data);
        $this->load->view('laporan/bulan_v');
        $this->load->view('layout/footer');
    }
}
