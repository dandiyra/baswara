<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_News');
        $this->load->model('M_Home');
    }

	public function index()
	{
		$data = [
			'title' => 'Home Page',
			'kat'	=> $this->db->get('katproduk')->result_array(),
			'value' => $this->M_News->newsDate(),
			'home'	=> $this->M_Home->home()

		];

		$this->load->view('users/home', $data);
	}
	public function contact()
	{
		$data = [
			'title' => 'Home Page',
			'kat'	=> $this->db->get('katproduk')->result_array(),
		];

		$this->load->view('users/home', $data);
	}
}