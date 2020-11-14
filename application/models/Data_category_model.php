<?php

class Data_category_model extends CI_Model
{
    public function getAlltb_category()
    {
        return $query = $this->db->get('tb_catagory')->result_array();
    }

    public function tambah_data_category()
    {
        $data = [
            "catagory" => $this->input->post('category', true)
        ];
        $this->db->insert('tb_catagory', $data);
    }
    public function get_data_category($id)
    {
        return $this->db->get_where('tb_catagory', ['id' => $id])->row_array();
    }

    public function ubah_data_category()
    {

        $data = [
            "catagory" => $this->input->post('category', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_catagory', $data);
    }
    public function hapus_data_catagory($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tb_catagory');
    }
}
