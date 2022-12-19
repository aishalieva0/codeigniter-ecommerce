<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model', 'payment_md');
    }

    public function index()
    {
        $data['title'] = 'Payment List';

        $payment = new Payment_model();

        $data['lists'] = $payment->select_all();

        $this->load->admin('payment/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('order', 'Order','required');



            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('payment/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order' => $this->security->xss_clean($this->input->post('order')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->payment_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/payment');
            }
        }

        $data['title'] = 'Payment List';

        $this->load->admin('payment/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('order', 'Order','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('payment/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order' => $this->security->xss_clean($this->input->post('order')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->payment_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/payment');
            }
        }

        $item = $this->payment_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/payment');
        }

        $data['item'] = $item;

        $data['title'] = 'Payment Edit';

        $this->load->admin('payment/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->payment_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/payment/delete/' . $id);
        }

        redirect('backend/payment');
    }
}
