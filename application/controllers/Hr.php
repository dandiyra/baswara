<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hr extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_form');
        $this->load->model('M_kandidat');
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman HRD',
            'hrd'   => $this->db->get('hr')->result_array(),
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/hr/hr', $data);
    }

    public function Tlowongan()
    {

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $gambar = $_FILES['gambar'];
        $this->upload->do_upload('gambar');

        $gambar = $this->upload->data('file_name');
        $pekerjaan = $this->input->post('pekerjaan');

        $input = [
            'pekerjaan'     => $pekerjaan,
            'slugC'         => url_title($pekerjaan),
            'requirement'   => $this->input->post('kriteria'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'tanggalD'       => $this->input->post('tanggal'),
            'gambar'        => $gambar,
            'dUpload'       => time(),
        ];

        $this->db->insert('hr', $input);
        $this->session->set_flashdata('message', 'Data lowongan berhasil ditambahkan');
        redirect('Hr/');
    }

    public function Elowongan($id)
    {

        $pekerjaan = $this->input->post('pekerjaan');

        $input = [
            'pekerjaan'     => $pekerjaan,
            'slugC'         => url_title($pekerjaan),
            'requirement'   => $this->input->post('kriteria'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'tanggalD'       => $this->input->post('tanggal'),
            'dUpload'       => time(),
        ];

        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $gambar = $_FILES['gambar'];

        $path = './assets1/img-produk/';
        $_id = $this->db->get_where('hr', ['idHr' => $id])->row_array();
        unlink($path . $_id['gambar']);


        if (!$this->upload->do_upload('gambar')) {
            $this->db->where('idHr', $id);
            $this->db->update('hr', $input);
            $this->session->set_flashdata('message', 'Data lowongan berhasil dirubah');
            redirect('Hr/');
        } else {
            $config['upload_path'] = './assets1/img-produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            $gambar = $_FILES['gambar'];

            $gambar = $this->upload->data('file_name');

            unlink($path . $_id['gambar']);

            $this->db->where('idHr', $id);
            $this->db->set('gambar', $gambar);
            $this->db->update('hr', $input);
            $this->session->set_flashdata('message', 'Data lowongan berhasil dirubah');
            redirect('Hr/');
        }
    }

    public function Dlowongan($id)
    {
        $path = './assets1/img-produk';
        $_id = $this->db->get_where('hr', ['idHr' => $id])->row_array();
        $query = $this->db->delete('hr', ['idHr' => $id]);
        if ($query) {
            unlink($path . $_id['gambar']);
        }
        $this->session->set_flashdata('message', 'Data lowongan berhasil dihapus');
        redirect('Hr/');
    }

    public function applier()
    {
        $data = [
            'title' =>  'Admin Data Lowongan Pekerjaan',
            'cr'    => $this->M_kandidat->getCareer(),
            'akun'  => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('header/header-adm', $data);
        $this->load->view('sidebar/sidebar');
        $this->load->view('admin/hr/kandidat', $data);
    }
}