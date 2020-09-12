<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('laporan/laporan_v');
        $this->load->view('layout/footer');
    }
}
