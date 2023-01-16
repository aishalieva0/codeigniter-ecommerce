<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Compare extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users_md');// ayrica table yarat
    }

    public function index()
    {
        $data=[];
        $this->load->front('pages/compare', $data);
        
    }
}
