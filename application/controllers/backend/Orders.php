<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Orders_model', 'orders_md');
        $this->load->model('Order_status_model', 'order_status_md');
        $this->load->model('Users_model', 'users_md');
        $this->load->model('Payment_model', 'payment_md');
        $this->load->model('Delivery_methods_model', 'delivery_methods_md');
    }

    public function index()
    {
        $data['title'] = 'Orders List';

        $orders = new Orders_model();

        $data['lists'] = $orders->select_all();

        $this->load->admin('orders/index', $data);
    }


    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('orders/edit');
            }

            $request_data = [
                'status_id' => $this->security->xss_clean($this->input->post('status_id'))
            ];

            $affected_rows = $this->orders_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
            }
            redirect('backend/orders');
        }

        $item = $this->orders_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');
            redirect('backend/orders');
        }

        $data['item'] = $item;
        $data['title'] = 'Order Edit';

        $order_status = new Order_status_model();
        $data['order_status'] = $order_status->select_all();

        $this->load->admin('orders/edit', $data);
    }
}
