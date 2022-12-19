<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_products_model', 'order_products_md');
    }

    public function index()
    {
        $data['title'] = 'Order_products List';

        $order_products = new Order_products_model();

        $data['lists'] = $order_products->select_all();

        $this->load->admin('order_products/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            
            $this->form_validation->set_rules('order_id', 'Order','required');
            $this->form_validation->set_rules('product_id', 'Product','required');
            $this->form_validation->set_rules('price', 'Price','required');
            $this->form_validation->set_rules('quantity', 'Quantity','required');
            $this->form_validation->set_rules('amount', 'Amount','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('order_products/create');
            }

            $request_data = [
                'order_id' => $this->security->xss_clean($this->input->post('order_id')),
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'amount' => $this->security->xss_clean($this->input->post('amount')),
            ];

            $insert_id = $this->order_products_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/order_products');
            }
        }

        $data['title'] = 'Order_products List';

        $this->load->admin('order_products/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('order_id', 'Order','required');
            $this->form_validation->set_rules('product_id', 'Product','required');
            $this->form_validation->set_rules('price', 'Price','required');
            $this->form_validation->set_rules('quantity', 'Quantity','required');
            $this->form_validation->set_rules('amount', 'Amount','required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('order_products/edit');
            }

            $request_data = [
                'order_id' => $this->security->xss_clean($this->input->post('order_id')),
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'amount' => $this->security->xss_clean($this->input->post('amount')),
            ];

            $affected_rows = $this->order_products_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/order_products');
            }
        }

        $item = $this->order_products_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/order_products');
        }

        $data['item'] = $item;

        $data['title'] = 'Product Edit';

        $this->load->admin('order_products/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->order_products_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/order_products/delete/' . $id);
        }

        redirect('backend/order_products');
    }
}
