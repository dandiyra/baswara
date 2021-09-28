<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_search');
    }

    public function index()
    {
        $search = $this->input->post('search');

        $data = [
            'title'     => 'Search Result',
            'news'      => $this->M_search->get_news($search),
            'product'   => $this->M_search->get_produk($search),
        ];

        if ($data == null) {
            $this->load->view('user/404', $data);
        } elseif ($search) {
            $this->load->view('user/search', $data);
        } else {
            $this->load->view('user/404', $data);
        }
    }
}