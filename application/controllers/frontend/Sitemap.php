<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sitemap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users_md');
    }

    public function index()
    {

        $data = [];
        $this->load->front('pages/sitemap', $data);


    }
}