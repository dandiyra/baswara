<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'     => 'Admin User Access',
            'akun'      => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'user'      => $this->db->get('user')->result_array(),
            'access'    => $this->db->get_where('user', ['roleId' => $this->session->userdata('role_id')])->row_array(),
            'menu'      => $this->db->get('menu')->result_array(),
        ];

        // var_dump($data['access']);

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar', $data);
        $this->load->view('admin/admin-utama/access', $data);
    }

    // public function useraccess($id)
    // {
    //     $data = [
    //         'title'     => 'User Access Manajemen',
    //         'user'      => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
    //         'access'    => $this->db->get_where('user', ['id_user' => $id])->row_array(),
    //         'menu'      => $this->db->get('menu')->result_array(),
    //     ];

    //     $this->load->view('header/header-adm', $data);
    //     $this->load->view('sidebar/sidebar', $data);
    //     $this->load->view('admin/admin-utama/useraccess', $data);
    // }

    public function changeaccess()
    {
        $data = [
            'menu_id' => $this->input->post('menuId'),
            'idUser' => $this->input->post('roleId'),
        ];

        $result = $this->db->get_where('access', $data);

        if ($result->row_array() < 1) {
            $this->db->insert('access', $data);
            $this->session->set_flashdata('message', 'Akses berhasil ditambahkan');
        } else {
            $this->db->delete('access', $data);
            $this->session->set_flashdata('message', 'Akses Berhasil dirubah');
        }
    }
}