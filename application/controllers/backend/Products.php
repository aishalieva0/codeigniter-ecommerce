<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model', 'products_md');
    }

    public function index()
    {
        $data['title'] = 'Products List';

        $products = new Products_model();

        $data['lists'] = $products->select_all();

        $this->load->admin('products/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            
            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('brand_id', 'Brand','required');
            $this->form_validation->set_rules('price', 'Price','required');
            $this->form_validation->set_rules('quantity', 'Quantity','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('products/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'desc' => $this->security->xss_clean($this->input->post('desc')),
                'brand_id' => $this->security->xss_clean($this->input->post('brand_id')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'sale_price' => $this->security->xss_clean($this->input->post('sale_price')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->products_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/products');
            }
        }

        $data['title'] = 'Products List';

        $this->load->admin('products/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('brand_id', 'Brand','required');
            $this->form_validation->set_rules('price', 'Price','required');
            $this->form_validation->set_rules('quantity', 'Quantity','required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('products/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'desc' => $this->security->xss_clean($this->input->post('desc')),
                'brand_id' => $this->security->xss_clean($this->input->post('brand_id')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'sale_price' => $this->security->xss_clean($this->input->post('sale_price')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->products_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/products');
            }
        }

        $item = $this->products_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/products');
        }

        $data['item'] = $item;

        $data['title'] = 'Product Edit';

        $this->load->admin('products/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->products_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/products/delete/' . $id);
        }

        redirect('backend/products');
    }
}
