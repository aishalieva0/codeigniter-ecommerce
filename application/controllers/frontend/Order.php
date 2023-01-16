<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users_md');
    }

    public function history()
    {
      
        $data=[];
        $this->load->front('pages/order_history', $data);
        
        
    }

    public function info()
    {
      
        $data=[];
        $this->load->front('pages/order_info', $data);
        
        
    }
}
