<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'  => 'About Us Page',
        ];

        $this->load->view('user/company/about/about', $data);
    }
}