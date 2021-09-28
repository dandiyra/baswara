<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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
            'title' => 'Admin Produk',
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'id'    => $this->M_produk->dpID(),
            'en'    => $this->M_produk->dpEN(),
            // 'dproduk'   => $this->db->get('produk')->result_array(),
        ];

        // var_dump($data['dproduk']);
        // die();

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/produk/produk', $data);
    }

    public function Tproduk()
    {
        $i = 0;

        $data = [
            'title' => 'Admin Tambah Berita',
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'lang'  => [
                'id',
                'en'
            ],
        ];

        $this->form_validation->set_rules('header', 'Judul Header', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan Header', 'required');
        $this->form_validation->set_rules('produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi Produk', 'required');
        $this->form_validation->set_rules('kelebihan', 'Kelebihan Produk', 'required');


        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        // $bahasa = $this->post->input('bhs');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header/header-adm', $data);
            $this->load->view('sidebar/sidebar');
            $this->load->view('admin/produk/tambah', $data);
        } else {
            if ($this->input->post('bhs') == 'id') {

                $config['upload_path'] = './assets1/img-produk';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');

                $gambarID = $_FILES['gambar'];

                $gambarID = $this->upload->data('file_name');
                $uuid = random_string('alnum', 20);
                // $bhs = $this->input->post('bhs');

                $input = array(
                    array(
                        'bahasa'        => $this->input->post('bhs'),
                        'produk'        => $this->input->post('produk'),
                        'deskripsi'     => $this->input->post('deskripsi'),
                        'header'        => $this->input->post('header'),
                        'keterangan'    => $this->input->post('keterangan'),
                        'spesifikasi'   => $this->input->post('spesifikasi'),
                        'keunggulan'    => $this->input->post('kelebihan'),
                        'kategori'      => $this->input->post('kategori'),
                        'tanggal'       => time(),
                        'Fuuid'         => $uuid,
                        'gambar'        => $gambarID
                    ),

                    array(
                        'bahasa'        => 'en',
                        'produk'        => '',
                        'deskripsi'     => '',
                        'header'        => '',
                        'keterangan'    => '',
                        'spesifikasi'   => '',
                        'keunggulan'    => '',
                        'kategori'      => '',
                        'tanggal'       => time(),
                        'Fuuid'         => $uuid,
                        'gambar'        => $gambarID
                    ),
                );

                $this->db->insert_batch('produk', $input);
                $this->session->set_flashdata('message', 'Data produk berhasil ditambahkan');
                redirect('Produk/');
            } elseif ($this->input->post('bhs') == 'en') {
                $config['upload_path'] = './assets1/img-produk';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');

                $gambarID = $_FILES['gambar'];

                $gambarID = $this->upload->data('file_name');
                $uuid = random_string('alnum', 20);
                // $bhs = $this->input->post('bhs');

                $input = array(
                    array(
                        'bahasa'        => 'id',
                        'produk'        => '',
                        'deskripsi'     => '',
                        'header'        => '',
                        'keterangan'    => '',
                        'spesifikasi'   => '',
                        'keunggulan'    => '',
                        'kategori'      => '',
                        'tanggal'       => time(),
                        'Fuuid'         => $uuid,
                        'gambar'        => $gambarID
                    ),

                    array(
                        'bahasa'        => $this->input->post('bhs'),
                        'produk'        => $this->input->post('produk'),
                        'deskripsi'     => $this->input->post('deskripsi'),
                        'header'        => $this->input->post('header'),
                        'keterangan'    => $this->input->post('keterangan'),
                        'spesifikasi'   => $this->input->post('spesifikasi'),
                        'keunggulan'    => $this->input->post('kelebihan'),
                        'kategori'      => $this->input->post('kategori'),
                        'tanggal'       => time(),
                        'Fuuid'         => $uuid,
                        'gambar'        => $gambarID
                    ),
                );

                $this->db->insert_batch('produk', $input);
                $this->session->set_flashdata('message', 'Data produk berhasil ditambahkan');
                redirect('Produk/');
            }
        }
    }

    public function Eproduk($id)
    {
        $data = [
            'title'     => 'Admin Tambah Produk',
            'akun'      => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'dproduk'   => $this->db->get_where('produk', ['idProduk' => $id])->row_array(),
        ];

        $this->form_validation->set_rules('header', 'Judul Header', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan Header', 'required');
        $this->form_validation->set_rules('produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi Produk', 'required');
        $this->form_validation->set_rules('kelebihan', 'Kelebihan Produk', 'required');

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $path = './assets1/img-produk/';
        $_id = $this->db->get_where('produk', ['idProduk' => $id])->row_array();

        $input = [
            'produk'        => $this->input->post('produk'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'header'        => $this->input->post('header'),
            'keterangan'    => $this->input->post('keterangan'),
            'kategori'      => $this->input->post('kategori'),
            'spesifikasi'   => $this->input->post('spesifikasi'),
            'keunggulan'    => $this->input->post('kelebihan'),
            'tanggal'       => time(),
        ];

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header/header-adm', $data);
            $this->load->view('sidebar/sidebar');
            $this->load->view('admin/produk/rubah', $data);
        } else {
            if (!$this->upload->do_upload('gambar')) {
                $this->db->where('idProduk', $id);
                $this->db->update('produk', $input);
                $this->session->set_flashdata('message', 'Data produk berhasil dirubah');
                redirect('Produk/');
            } else {
                $config['upload_path'] = './assets1/img-produk';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');

                $gambar = $_FILES['gambar'];

                $gambar = $this->upload->data('file_name');

                $input = [
                    'produk'        => $this->input->post('produk'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'header'        => $this->input->post('header'),
                    'keterangan'    => $this->input->post('keterangan'),
                    'spesifikasi'   => $this->input->post('spesifikasi'),
                    'keunggulan'    => $this->input->post('kelebihan'),
                    'tanggal'       => time(),
                ];

                unlink($path . $_id['gambar']);

                $this->db->where('idProduk', $id);
                $this->db->set('gambar', $gambar);
                $this->db->update('produk', $input);
                $this->session->set_flashdata('message', 'Data Produk Berhasil Dirubah');
                redirect('Produk/');
            }
        }
    }

    public function Dproduk($id)
    {
        $path = './assets1/img-produk';
        $_id = $this->db->get_where('produk', ['idProduk' => $id])->result_array();
        $query = $this->db->delete('produk', ['idProduk' => $id]);
        if ($query) {
            unlink($path . $_id['gambar']);
        }
        $this->session->set_flashdata('message', 'Data produk berhasil dihapus');
        redirect('Produk/');
    }
}