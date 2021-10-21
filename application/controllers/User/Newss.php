<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newss extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_News');
    }

    public function index()
    {
        $this->load->library('pagination');
		$config['base_url'] = base_url().'User/News/index';
		$config['total_rows'] = $this->db->count_all('news');
        $config['use_page_numbers'] = true;
        $config['per_page']         = 6;
        $config['uri_segment']      = 4;
        $config['num_links']        = 5;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $config['first_url']        = base_url().'User/News/';
        $this->pagination->initialize($config);
        // Ambil data news

        $page                       = ($this->uri->segment(4)) ? ($this->uri->segment(4)-1) * $config['per_page']:0;
        $news                       =  $this->M_News->data($config['per_page'],$page);
        $data = [
            'title'         => 'News Page',
            'data'          => $news,
            'pagin'         => $this->pagination->create_links()


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
            'numCategory' => $this->M_News->category()
        ];

        $this->load->view('users/news/newsdetail', $data);
    }

    
    public function search()
    {
        $keywords   = $this->input->get('keywords');
    
        $data = [
            'title'         => 'News Page',
            'data'          => $this->M_News->get_keyword($keywords),
            'keyword'       => $keywords
        ];
        $this->load->view('users/news/search', $data);
    }

    public function detailKategori()
    {
        $keywords   = $this->input->get('keywords');
    
        $data = [
            'title'         => 'News Page',
            'data'          => $this->M_News->get_keyword($keywords),
            'keyword'       => $keywords
        ];
        $this->load->view('users/news/search', $data);
    }
}
