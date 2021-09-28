<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_News');
    }

    public function index()
    {
        $data = [
            'title'  => 'News Page',
            'data' => $this->M_News->newsDate(),

        ];

        $this->load->view('users/news/news', $data);
    }

    public function newsdetail($slug)
    {
        $data = [
            'title' => 'News',
            'tabel' => $this->db->get_where('news', ['slug' => $slug])->row_array(),
            'news' => $this->M_News->getNews($slug),
            'data' => $this->db->get('produk')->result_array(),
            'data1' => $this->db->get('produk')->result_array(),
        ];

        $this->load->view('users/news/newsdetail', $data);
    }
}
