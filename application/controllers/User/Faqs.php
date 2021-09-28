<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faqs extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'  => 'Home Page',
        ];

        $this->load->view('user/company/faqs/faqs', $data);
    }
}