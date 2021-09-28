<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_search extends CI_Model
{
    public function get_news($search)
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->like('judul', $search);
        $this->db->or_like('kategori', $search);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_produk($search)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->like('produk', $search);
        $this->db->or_like('kategori', $search);
        $query = $this->db->get();
        return $query->result_array();
    }
}