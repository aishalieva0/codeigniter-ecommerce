<?php
defined('BASEPATH') or exit('No direct script access allowed');
class My_account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users_md');// ayrica table yarat
    }

    public function index()
    {
        $data=[];
        $this->load->front('pages/my_account', $data);
        
    }
}
