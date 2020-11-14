<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kasir_model');
    }
    public function list($random)
    {
        $data['struk'] = $this->kasir_model->struk($random);
        $data['judul'] = 'Struck';
        $this->load->view('layout/header', $data);
        $this->load->view('struk/struk_v', $data);
        $this->load->view('layout/footer');
    }
}
