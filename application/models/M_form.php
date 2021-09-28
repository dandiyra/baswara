<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_form extends CI_Model
{
    public function uploadimage()
    {
        $config['upload_path'] = './assets1/img-produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';

        $this->load->library('upload', $config);

        $gambar = $_FILES['gambar'];
        $gambar = $this->upload->data('file_name');

        $this->db->set('gambar', $gambar);
    }
}