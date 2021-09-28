<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Home extends CI_Model
{
    public function home()
    {
     $this->db->select("*");
     $this->db->from('home');
     $this->db->order_by('idHome', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

}