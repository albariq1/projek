<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('stock/stock_v');
        $this->load->view('layout/footer');
    }
}
