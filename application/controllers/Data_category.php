<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_category_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Category';
        $data['tb_catagory'] = $this->Data_category_model->getAlltb_category();

        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('data_category/data_category_v', $data);
            $this->load->view('layout/footer');
        } else {

            $this->Data_category_model->tambah_data_category();
            $this->session->set_flashdata('berhasil', 'BERHASIL');
            redirect('Data_category');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'ubah data';
        $data['catagory'] = $this->Data_category_model->getAlltb_category();
        $data['tb_catagory'] = $this->Data_category_model->get_data_category($id);

        $this->form_validation->set_rules('category', 'category', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('data_category/ubah_data_category_v', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Data_category_model->ubah_data_category();
            $this->session->set_flashdata('berhasil', 'Diubah');
            redirect('data_category');
        }
    }
}
