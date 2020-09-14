<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Data_user_model');
    }

    public function index()
    {
        $data['judul'] = 'User';
        $data['tb_user'] = $this->Data_user_model->getAlltb_pegawai();
        $data['level'] = ['ADMIN', 'PEMILIK', 'KARYAWAN', 'MANAGER'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tl', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('passwordd', 'Password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('data_user/data_user_v');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'Nama'          => $this->input->post('nama'),
                'tanggal_lahir' => $this->input->post('tl'),
                'Password'      => password_hash($this->input->post('passwordd'), PASSWORD_DEFAULT),
                'level'      => $this->input->post('level'),
                'date_create'   => time()
            ];

            $this->db->insert('tb_pegawai', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Akun Berhasil Di Buat!
                </div>');
            redirect('Data_user');
        }
    }
    public function hapus($id)
    {

        $this->Data_user_model->hapus_data_user($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Data_user');
    }
}
