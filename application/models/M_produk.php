<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('tanggal');
        $this->db->group_by('Fuuid');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dpID()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('bahasa', 'id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dpEN()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('bahasa', 'en');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dataID()
    {
        $this->db->select('*');
        $this->db->from('katproduk');
        $this->db->where('bahasa', 'id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dataEN()
    {
        $this->db->select('*');
        $this->db->from('katproduk');
        $this->db->where('bahasa', 'en');
        $query = $this->db->get();
        return $query->result_array();
    }
}