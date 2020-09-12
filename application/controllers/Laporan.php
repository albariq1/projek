<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Laporan';
        $this->load->view('layout/header', $data);
        $this->load->view('laporan/laporan_v');
        $this->load->view('layout/footer');
    }
}
