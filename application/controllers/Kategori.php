<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_produk');
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Kategori Produk',
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            // 'kat'   => $this->M_produk->kategori(),
            'id'    => $this->M_produk->dataID(),
            'en'    => $this->M_produk->dataEN(),
            // 'kat'   => $this->db->get('katproduk')->result_array(),
            'lang'  => [
                'id',
                'en'
            ],
        ];

        // var_dump($data['id']);
        // die();

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/produk/kategori', $data);
    }


    public function Tkat()
    {
        $gambar = $_FILES['gambar'];
        $bahasa = $this->input->post('bhs');

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            redirect('Kategori/');
        } else {
            if ($bahasa == 'id') {

                $config['upload_path'] = './assets1/img-produk';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');

                $gambar = $this->upload->data('file_name');
                $uuid = random_string('alnum', 20);

                // $val = [
                //     'nKategori' => $this->input->post('kategori'),
                //     'gambar'    => $gambar,
                //     'deskripsi' => $this->input->post('deskripsi'),
                //     'tanggal'   => time(),
                // ];

                $val = array(
                    array(
                        'nKategori' => $this->input->post('kategori'),
                        'bahasa'    => 'id',
                        'gambar'    => $gambar,
                        'deskripsi' => $this->input->post('deskripsi'),
                        'tanggal'   => time(),
                        'uidKat'    => $uuid,
                    ),

                    array(
                        'nKategori' => '',
                        'bahasa'    => 'en',
                        'gambar'    => $gambar,
                        'deskripsi' => '',
                        'tanggal'   => time(),
                        'uidKat'    => $uuid,
                    )
                );

                $this->db->insert_batch('katproduk', $val);
                $this->session->set_flashdata('message', 'Data kategori berhasil ditambahkan');
                redirect('Kategori/');
            } else if ($bahasa == 'en') {

                $config['upload_path'] = './assets1/img-produk';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');

                $gambar = $this->upload->data('file_name');
                $uuid = random_string('alnum', 20);

                // $val = [
                //     'nKategori' => $this->input->post('kategori'),
                //     'gambar'    => $gambar,
                //     'deskripsi' => $this->input->post('deskripsi'),
                //     'tanggal'   => time(),
                // ];

                $val = array(
                    array(
                        'nKategori' => '',
                        'bahasa'    => 'id',
                        'gambar'    => $gambar,
                        'deskripsi' => '',
                        'tanggal'   => time(),
                        'uidKat'    => $uuid,
                    ),

                    array(
                        'nKategori' => $this->input->post('kategori'),
                        'bahasa'    => 'en',
                        'gambar'    => $gambar,
                        'deskripsi' => $this->input->post('deskripsi'),
                        'tanggal'   => time(),
                        'uidKat'    => $uuid,
                    )
                );

                $this->db->insert_batch('katproduk', $val);
                $this->session->set_flashdata('message', 'Data kategori berhasil ditambahkan');
                redirect('Kategori/');
            }
        }
    }

    public function Ekat()
    {
        $id = $this->input->post('idKat');

        $val = [
            'nKategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal'   => time(),
        ];

        $path = './assets1/img-produk/';
        $_id = $this->db->get_where('katproduk', ['idKat' => $id])->row_array();

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->db->where('idKat', $id);
            $this->db->update('katproduk', $val);
            $this->session->set_flashdata('message', 'Data Edited');
            redirect('Kategori/');
        } else {
            $config['upload_path'] = './assets1/img-produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            $gambar = $_FILES['gambar'];

            $gambar = $this->upload->data('file_name');

            unlink($path . $_id['gambar']);

            $this->db->where('idKat', $id);
            $this->db->set('gambar', $gambar);
            $this->db->update('katproduk', $val);
            $this->session->set_flashdata('message', 'Data kategori berhasil dirubah');
            redirect('Kategori/');
        }
    }

    public function Dkat($id)
    {
        $path = './assets1/img-produk';
        $_id = $this->db->get_where('katproduk', ['uidKat' => $id])->row_array();
        $query = $this->db->delete('katproduk', ['uidKat' => $id]);
        if ($query) {
            unlink($path . $_id['gambar']);
        }
        $this->session->set_flashdata('message', 'Data kategori berhasil dihapus');
        redirect('Kategori/');
    }
}