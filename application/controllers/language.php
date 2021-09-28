<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Language extends CI_Controller
{
    // fungsi merubah bahasa pada setiap halaman website
    public function translate($language)
    {
        $newdata = array(
            'language'  => $language,
            'produk'    => $this->db->get('produk')->result_array(),
        );

        $this->session->set_userdata($newdata);

        if ($this->session->userdata('language')) {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}