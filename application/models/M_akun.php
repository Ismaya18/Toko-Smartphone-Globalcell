<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pelanggan');
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get()->result();
    }

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pelanggan');
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_pelanggan', $data['id_pelanggan']);
        $this->db->update('tbl_pelanggan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_pelanggan', $data['id_pelanggan']);
        $this->db->delete('tbl_pelanggan', $data);
    }
}
