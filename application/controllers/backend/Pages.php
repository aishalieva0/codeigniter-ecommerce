<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model', 'pages_md');
    }

    public function index()
    {
        $data['title'] = 'pages List';

        $pages = new Pages_model();

        $data['lists'] = $pages->select_all();

        $this->load->admin('pages/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
          


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('pages/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'desc' => $this->security->xss_clean($this->input->post('desc')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->pages_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/pages');
            }
        }

        $data['title'] = 'pages List';

        $this->load->admin('pages/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('pages/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'desc' => $this->security->xss_clean($this->input->post('desc')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->pages_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/pages');
            }
        }

        $item = $this->pages_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/pages');
        }

        $data['item'] = $item;

        $data['title'] = 'Product Edit';

        $this->load->admin('pages/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->pages_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/pages/delete/' . $id);
        }

        redirect('backend/pages');
    }
}
