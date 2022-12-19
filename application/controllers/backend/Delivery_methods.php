<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delivery_methods extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Delivery_methods_model', 'delivery_methods_md');
    }

    public function index()
    {
        $data['title'] = 'Delivery Methods List';

        $delivery_methods = new Delivery_methods_model();

        $data['lists'] = $delivery_methods->select_all();

        $this->load->admin('delivery_methods/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('order_id', 'Order','required');



            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('delivery_methods/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order_id' => $this->security->xss_clean($this->input->post('order_id')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->delivery_methods_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/delivery_methods');
            }
        }

        $data['title'] = 'Delivery Methods List';

        $this->load->admin('delivery_methods/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('order_id', 'Order','required');



            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('delivery_methods/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order_id' => $this->security->xss_clean($this->input->post('order_id')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->delivery_methods_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/delivery_methods');
            }
        }

        $item = $this->delivery_methods_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/delivery_methods');
        }

        $data['item'] = $item;

        $data['title'] = 'Delivery Methods Edit';

        $this->load->admin('delivery_methods/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->delivery_methods_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/delivery_methods/delete/' . $id);
        }

        redirect('backend/delivery_methods');
    }
}
