<?php

class Laporan_model extends CI_Model
{

    public function getAlltb_penjualan_detail()
    {
        return $query = $this->db->get('tb_penjualan_detail')->result_array();
    }
    public function getAlltb_penjualan()
    {
        return $query = $this->db->get('tb_penjualan')->result_array();
    }
    public function getAlltb_karyawan()
    {
        $this->db->where('level', 'KARYAWAN');
        $this->db->or_where('level', 'ADMIN');
        return $query = $this->db->get('tb_pegawai')->result_array();
    }
    public function total_belanja($tanggal = null)
    {
        $this->db->select_sum('tb_penjualan.total_belanja');
        if ($tanggal == null) {
            $this->db->where('tgl_penjualan', date('Y-m-d'));
        } else if ($tanggal) {
            $this->db->where('tgl_penjualan', $tanggal);
        }
        $query = $this->db->get('tb_penjualan')->result_array();
        return $query;
    }
    public function total_modal($tanggal = null)
    {

        $this->db->select_sum('tb_penjualan_detail.harga_modal');
        if ($tanggal == null) {
            $this->db->where('tanggal_detail', date('Y-m-d'));
        } else if ($tanggal) {
            $this->db->where('tanggal_detail', $tanggal);
        }
        $query = $this->db->get('tb_penjualan_detail')->result_array();
        return $query;
    }
    public function total_karyawan($nama = null)
    {
        $this->db->select_sum('tb_penjualan.total_belanja');
        $this->db->where('id_pegawai', $nama);
        $query = $this->db->get('tb_penjualan')->result_array();
        return $query;
    }
    public function total_modal_karyawan($nama = null)
    {
        $this->db->select_sum('tb_penjualan_detail.harga_modal');
        $this->db->where('id_pegawai', $nama);
        $query = $this->db->get('tb_penjualan_detail')->result_array();
        return $query;
    }
    public function total_bulan()
    {
        $bln = date("m");
        return $this->db->query("select sum(total_belanja) as total_belanja from tb_penjualan WHERE MONTH(tgl_penjualan) = '$bln' ")->result_array();
    }
    public function total_modal_bulan()
    {
        $bln = date("m");
        return $this->db->query("select sum(harga_modal) as harga_modal from tb_penjualan_detail WHERE MONTH(tanggal_detail) = '$bln' ")->result_array();
    }
}
