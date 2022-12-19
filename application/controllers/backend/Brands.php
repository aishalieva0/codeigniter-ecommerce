<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brands extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Brands_model', 'brands_md');
    }

    public function index()
    {
        $data['title'] = 'Brands List';

        $brands = new Brands_model();

        $data['lists'] = $brands->select_all();

        $this->load->admin('brands/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('brands/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'logo' => $this->security->xss_clean($this->input->post('logo')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->brands_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/brands');
            }
        }

        $data['title'] = 'Brands List';

        $this->load->admin('brands/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('brands/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                // 'logo' => $this->security->xss_clean($this->input->post('logo')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->brands_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/brands');
            }
        }

        $item = $this->brands_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/brands');
        }

        $data['item'] = $item;

        $data['title'] = 'Product Edit';

        $this->load->admin('brands/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->brands_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/brands/delete/' . $id);
        }

        redirect('backend/brands');
    }
}
