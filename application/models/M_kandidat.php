<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kandidat extends CI_Model
{
    public function getCareer()
    {
        $this->db->select('*');
        $this->db->from('hr a');
        $this->db->join('career b', 'b.slug=a.slugC', 'left');
        $this->db->order_by('tanggalU');
        $query = $this->db->get();
        return $query->result_array();
    }
}