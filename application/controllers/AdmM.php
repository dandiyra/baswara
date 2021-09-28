<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdmM extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Admin Page',
            'user'  => $this->db->get('user')->result_array(),
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        // var_dump($data['akun']);
        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar', $data);
        $this->load->view('admin/admin-utama/index', $data);
    }

    public function Tuser()
    {
        $data = [
            'nama'      => $this->input->post('user'),
            'email'     => $this->input->post('email'),
            'telepon'   => $this->input->post('telepon'),
            'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'roleId'      => $this->input->post('role'),
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', 'User berhasil ditambahkan');
        redirect('AdmM/');
    }

    public function Euser($id)
    {
        $data = [
            'nama'      => $this->input->post('user'),
            'email'     => $this->input->post('email'),
            'telepon'   => $this->input->post('telepon'),
            'roleId'    => $this->input->post('role'),
        ];

        $this->db->where('idUser', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', 'User berhasil diperbaharui');
        redirect('AdmM/');
    }

    public function Duser($id)
    {
        $this->db->where('idUser', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', 'User berhasil dihapus');
        redirect('AdmM/');
    }
}