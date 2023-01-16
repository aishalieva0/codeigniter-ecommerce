<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admins_model', 'admins_md');
    }

    public function index()
    {
        $data = [];
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $admins = new Admins_model();

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Şifrə', 'required');

            $request_data = [
                'email' => $this->security->xss_clean($this->input->post('email')),
                'password' => md5($this->input->post('password'))
            ];
            $data['admin'] = $admins->loggedin($request_data['email'], $request_data['password']);

            if ($data['admin']) {
                $this->session->set_flashdata('success_message', 'Success');
                $this->session->set_userdata('admin', $data['admin']);
                $this->session->set_userdata('loggedin', 1);
                redirect('backend/dashboard');
            } else {
                $this->session->set_flashdata('error_message', 'Error');
                redirect('backend/login');
            }
        }
        $this->load->view('backend/login', $data);
    }


    public function logout()
    {
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('loggedin');

        redirect('backend/login');
    }
}
