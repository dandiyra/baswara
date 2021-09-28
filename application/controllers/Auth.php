<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
  {
    if ($this->session->userdata('email') == null) {
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');


      if ($this->form_validation->run() == false) {

        $cookie =  get_cookie('dbproject');
        $cookiepass = get_cookie('_sap');

        if($cookie){
          $user = $this->db->get_where('user', ['cookie' => $cookie])->row();
          if($user){
            if ($cookiepass) {
              if (password_verify($cookiepass, $user->password)) {
                $data = [
                  'email'     => $user->email,
                  'nama'      => $user->nama,
                  'idUser'    => $user->idUser,
                  'role_id'   => $user->roleId
                ];
                // set userdata ke session
                $this->session->set_userdata($data);
                if ($this->session->userdata('roleId') == 0) {
                  redirect('AdmM/');
                }

                // $this->session->set_flashdata('message', "Welcome Back!");
                // redirect('User/');
              }else{
                $data = [
                  'title'        => 'Log in',
                  'email'      => $user->email
                ];
                $this->load->view('auth/login', $data);
              }
            } else {
              $data = [
                'title'        => 'Log in',
                'email'      => $user->email
              ];
              $this->load->view('auth/login', $data);
            }
          }else{
            $data = [
              'title'        => 'Log in',
              'email'      => ''
            ];
            $this->load->view('auth/login', $data);
          }
        }else{
          $data = [
            'title'        => 'Log in',
            'email'      => ''
          ];
          $this->load->view('auth/login', $data);
        }
      } else {
        $email     = $this->input->post('email', true);
        $pass     = $this->input->post('password');
        $remember   = $this->input->post('remember');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
          if (password_verify($pass, $user['password'])) {
            if ($remember != Null) {
              set_cookie('_sap', $pass, 3600 * 24 * 365);
            }
            $key = random_string('alpha', 64);
            set_cookie('dbproject', $key, 3600 * 24 * 365);
            $update_key = [
              'cookie' => $key
            ];
            $this->db->where('email', $user['email']);
            $this->db->update('user', $update_key);

            $data = [
              'email'     => $user['email'],
              'nama'      => $user['nama'],
              'idUser'    => $user['idUser'],
              'role_id'   => $user['roleId']
              // 'divisi'    => $user['divisi'],
              // 'plan'    => $user['plan'],
              // 'sub_role'  => $user['sub_role']
            ];

            // set userdata ke session
            $this->session->set_userdata($data);
            if ($data['role_dd'] == 0) {
              redirect('AdmM/');
            }
            // redirect('User/');
          } else {
            $this->session->set_flashdata('message', 'Wrong Password');
            redirect('auth/');
          }
        } else {
          $this->session->set_flashdata('message', 'not registered');
          redirect('auth/');
        }
      }
    } else {
      redirect('AdmM/');
    }
  }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('idUser');

        $this->session->set_flashdata('message', 'You have been Logout');
        redirect('Auth/');
    }

    public function block()
    {
        if ($this->session->userdata('posisi') == null) {
            redirect('auth/');
        }
        $data = [
            'header'        => 'Block',
            'title'         => 'Block',
            'pr_num'        => $this->db->get_where('purchase_req', ['acc_by' => null])->num_rows(),
            'job_num'       => $this->db->get_where('detail_job', ['is_done' => 0, 'task_to' => $this->session->userdata('nama')])->num_rows(),
            'project'       => $this->db->get('project')->result_array(),
            'user'          => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('auth/block', $data);
    }
}