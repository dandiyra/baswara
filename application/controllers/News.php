<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user   = $this->session->userdata('idUser');
        $akses  = $this->db->get_where('access', ['idAccess' => $user])->row_array();

        if ($user == null){
            redirect('Home/');
        } elseif ($akses['idUser'] == $akses['menu_id']) {
        $data = [
            'title'     => 'Admin Halaman News',
            'akun'      => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'berita'    => $this->db->get('news')->result_array(),
        ];

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/news/news', $data);
        } else {
        redirect('Block/');
    }
    }

    public function baru()
    {
        $data = [
            'title'     => 'Admin Tambah Berita',
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->form_validation->set_rules('meta', 'Keterangan Meta', 'required');
        $this->form_validation->set_rules('kunci', 'Keyword Berita', 'required');
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Berita', 'required');
        $this->form_validation->set_rules('artikel', 'Artikel Berita', 'required');

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $judul = $this->input->post('judul');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header/header-adm', $data);
            $this->load->view('sidebar/sidebar');
            $this->load->view('admin/news/baru', $data);
        } else {
            $config['upload_path'] = './assets1/img-produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            $this->upload->do_upload('gambar');

            $gambar = $_FILES['gambar'];

            $gambar = $this->upload->data('file_name');

            $input = [
                'slug'      => url_title($judul),
                'meta'      => $this->input->post('meta'),
                'keyword'   => $this->input->post('kunci'),
                'judul'     => $judul,
                'kategori'  => $this->input->post('kategori'),
                'berita'    => $this->input->post('artikel'),
                'tanggal'   => time(),
            ];

            $this->db->set('gambar', $gambar);
            $this->db->insert('news', $input);
            $this->session->set_flashdata('message', 'Berita berhasil ditambahkan');
            redirect('News/');
        }
    }

    public function Enews($id)
    {
        $data = [
            'title' => 'Admin Edit Berita',
            'akun'      => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'dnews'  => $this->db->get_where('news', ['idNews' => $id])->row_array(),
        ];

        $this->form_validation->set_rules('meta', 'Keterangan Meta', 'required');
        $this->form_validation->set_rules('kunci', 'Keyword Berita', 'required');
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Berita', 'required');
        $this->form_validation->set_rules('artikel', 'Artikel Berita', 'required');

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $id = $this->input->post('idnews');
        $judul = $this->input->post('judul');
        $path = './assets1/img-produk/';
        $_id = $this->db->get_where('news', ['idNews' => $id])->row_array();

        $input = [
            'slug'      => url_title($judul),
            'meta'      => $this->input->post('meta'),
            'keyword'   => $this->input->post('kunci'),
            'judul'     => $judul,
            'kategori'  => $this->input->post('kategori'),
            'berita'    => $this->input->post('artikel'),
            'tanggal'   => time(),
        ];

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header/header-adm', $data);
            $this->load->view('sidebar/sidebar');
            $this->load->view('admin/news/edit', $data);
        } else {
            if (!$this->upload->do_upload('gambar')) {
                $this->db->where('idNews', $id);
                $this->db->update('news', $input);
                $this->session->set_flashdata('message', 'Berita berhasil dirubah');
                redirect('News/');
            } else {
                $config['upload_path'] = './assets1/img-produk';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');

                $gambar = $_FILES['gambar'];

                $gambar = $this->upload->data('file_name');

                $input = [
                    'slug'      => url_title($judul),
                    'meta'      => $this->input->post('meta'),
                    'keyword'   => $this->input->post('kunci'),
                    'judul'     => $judul,
                    'kategori'  => $this->input->post('kategori'),
                    'berita'    => $this->input->post('artikel'),
                    'tanggal'   => time(),
                ];

                unlink($path . $_id['gambar']);

                $this->db->where('idNews', $id);
                $this->db->set('gambar', $gambar);
                $this->db->update('news', $input);
                $this->session->set_flashdata('message', 'Berita berhasil dirubah');
                redirect('News/');
            }
        }
    }

    public function Dnews($id)
    {
        $path = './assets1/img-produk';
        $_id = $this->db->get_where('news', ['idNews' => $id])->row_array();
        $query = $this->db->delete('news', ['idNews' => $id]);
        if ($query) {
            unlink($path . $_id['gambar']);
        }
        $this->session->set_flashdata('message', 'Berita berhasil dihapus');
        redirect('News/');
    }
}
