<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Account Detail',
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/account', $data);
    }

    public function update()
    {
        $input = [
            'password' => password_hash($this->input->post('new'), PASSWORD_DEFAULT),
        ];

        $pass = $this->input->post('old');
        $data = [
            'email' => $this->input->post('email'),
            'nama'  => $this->input->post('nama'),
        ];
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($pass == null) {
            $this->db->where('idUser', $this->session->userdata('idUser'));
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', 'Profile Berhasil Dirubah');
            redirect('Account');
        } elseif ($pass !== null && password_verify($pass, $user['password'])) {
            if (password_verify($input, $user['password'])) {
                $this->session->set_flashdata('message', 'Password sama dengan sebelumnya');
                redirect('Account');
            }

            $this->db->set($input);
            $this->db->where('idUser', $this->session->userdata('idUser'));
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', 'Profile Berhasil Dirubah');
            redirect('Account/');
        } else {
            $this->session->set_flashdata('message', 'Password salah');
            redirect('Account/');
        }
    }
}