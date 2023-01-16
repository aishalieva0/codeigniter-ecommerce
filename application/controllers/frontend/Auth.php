<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users_md');
    }

    public function login()
    {

        $data = [];
        // if ($this->input->post()) {
        //     $this->load->library('form_validation');
        //     $users = new Users_model();

        //     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        //     $this->form_validation->set_rules('password', 'Şifrə', 'required');

        //     $request_data = [
        //         'email' => $this->security->xss_clean($this->input->post('email')),
        //         'password' => md5($this->input->post('password'))
        //     ];

        //     $data['user'] = $users->loggedin($request_data['email'], $request_data['password']);

        //     if ($data['user']) {
        //         $this->session->set_flashdata('success_message', 'Success');
        //         $this->session->set_userdata('user', $data['user']);
        //         $this->session->set_userdata('loggedin', 1);
        //         redirect('frontend');
        //     } else {
        //         $this->session->set_flashdata('error_message', 'Error');
        //         redirect('frontend/login');
        //     }
        // }
        $this->load->front('pages/login', $data);
    }

    public function signup()
    {

        $data = [];
        $this->load->front('pages/register', $data);
    }
}
