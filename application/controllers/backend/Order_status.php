<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_status extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_status_model', 'order_status_md');
    }

    public function index()
    {
        $data['title'] = 'Order_status List';

        $order_status = new Order_status_model();

        $data['lists'] = $order_status->select_all();

        $this->load->admin('order_status/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');



            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('order_status/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->order_status_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/order_status');
            }
        }

        $data['title'] = 'Order_status List';

        $this->load->admin('order_status/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('order_status/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->order_status_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/order_status');
            }
        }

        $item = $this->order_status_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/order_status');
        }

        $data['item'] = $item;

        $data['title'] = 'Order_status Edit';

        $this->load->admin('order_status/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->order_status_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/order_status/delete/' . $id);
        }

        redirect('backend/order_status');
    }
}
