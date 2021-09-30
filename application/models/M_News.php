<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_News extends CI_Model
{
    function __construct() {
        $this->tblName = 'posts';
    }

//    public function get_keyword($search)
//    {
//        $this->db->select('*');
//        $this->db->from('news');
//        $this->db->like('judul', $search);
//        $this->db->or_like('kategori', $search);
//        $query = $this->db->get();
//        return $query->result_array();
//    }
   
   public function getNews($slug)
   {
       $this->db->select("*");
       $this->db->from('news');
       $this->db->where('slug', $slug);
       $this->db->limit(4);
       $this->db->order_by('idNews', 'random');
       $query = $this->db->get();
       return $query->result_array();
   }

   public function newsDate()
   {
    $this->db->select("*");
    $this->db->from('news');
    $this->db->order_by('idNews', 'desc');
       $query = $this->db->get();
       return $query->result_array();
   }

   public function data($limit,$start)
   {
    $this->db->select('*');
    $this->db->from('news');
    $this->db->order_by('idNews', 'desc');
    $this->db->limit($limit,$start);
    $query = $this->db->get();
    return $query->result_array();
   }

   public function category()
   {
       $this->db->select('kategori, count(kategori) as num');
       $this->db->from('news');
       $this->db->group_by('kategori');
       $this->db->limit(5);
       $this->db->order_by('num', 'desc');
       $query = $this->db->get();
       return $query->result_array();
   }

   public function get_keyword($keywords)
   {
       $this->db->select('*');
       $this->db->from('news');
       $this->db->like('judul', $keywords);
       $this->db->or_like('keyword', $keywords);
       $this->db->or_like('kategori', $keywords);
       $query = $this->db->get();
       return $query->result_array();
   }

   public function getNewsCat($slug)
   {
       $this->db->select("*");
       $this->db->from('news');
       $this->db->where('slug', $slug);
       $this->db->limit(4);
       $this->db->order_by('kategori', 'random');
       $query = $this->db->get();
       return $query->result_array();
   }

   

}