<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Admin Pengaturan Home',
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'web'   => $this->db->get('home')->result_array(),
        ];

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/website/home', $data);
    }

    public function Thome()
    {
        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $gambar = $_FILES['gambar'];

        if (!$this->upload->do_upload('gambar')) {
            redirect('Website/');
        } else {
            $config['upload_path'] = './assets1/img-produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            $this->upload->do_upload('gambar');

            $gambar = $this->upload->data('file_name');

            $val = [
                'nGambar'   => $this->input->post('nama'),
                'gambar'    => $gambar,
                'tanggal'   => time(),
            ];

            $this->db->insert('home', $val);
            $this->session->set_flashdata('message', 'Data website berhasil ditambahkan');
            redirect('Website/');
        }
    }

    public function Ehome()
    {
        $id = $this->input->post('idhome');

        $val = [
            'nGambar'   => $this->input->post('nama'),
            'tanggal'   => time(),
        ];

        $path = './assets1/img-produk/';
        $_id = $this->db->get_where('home', ['idHome' => $id])->row_array();

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->db->where('idHome', $id);
            $this->db->update('home', $val);
            $this->session->set_flashdata('message', 'Data Edited');
            redirect('Website/');
        } else {
            $config['upload_path'] = './assets1/img-produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            $gambar = $_FILES['gambar'];

            $gambar = $this->upload->data('file_name');

            unlink($path . $_id['gambar']);

            $this->db->where('idHome', $id);
            $this->db->set('gambar', $gambar);
            $this->db->update('home', $val);
            $this->session->set_flashdata('message', 'Data website berhasil dirubah');
            redirect('Website/');
        }
    }

    public function Dhome($id)
    {
        $path = './assets1/img-produk';
        $_id = $this->db->get_where('home', ['idHome' => $id])->row_array();
        $query = $this->db->delete('home', ['idHome' => $id]);
        if ($query) {
            unlink($path . $_id['gambar']);
        }
        $this->session->set_flashdata('message', 'Data Website berhasil dihapus');
        redirect('Website/');
    }
}