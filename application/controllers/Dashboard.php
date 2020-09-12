<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->load->view('layout/header', $data);
        $this->load->view('dashboard/Dashboard_v');
        $this->load->view('layout/footer');
    }
}
