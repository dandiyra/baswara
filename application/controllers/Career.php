<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'  => 'Home Page',
            // 'kat'    => $this->db->get('katproduk')->result_array(),
            'career'    => $this->db->get('hr')->result_array(),
        ];

        $this->load->view('user/career/career', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title'     => 'Career Page',
            'career'  => $this->db->get_where('hr', ['slugC' => $slug])->row_array(),
        ];

        $this->load->view('user/career/careerdetail', $data);
    }

    public function upload()
    {
        $input = [
            'nama'  => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'tanggalU' => time(),
            'tanggalL' => $this->input->post('tanggal'),
            'gender' => $this->input->post('gender'),
            'nik' => $this->input->post('nik'),
            'status' => $this->input->post('status'),
            'telepon' => $this->input->post('telepon'),
            'slug'    => $this->input->post('slug'),
        ];

        $this->db->insert('career', $input);
        $this->session->set_flashdata('message', 'Data Kamu sudah tersimpan untuk pekerjaan ini silahkan tunggu respon dari kami');
        redirect('Career/');
    }
}