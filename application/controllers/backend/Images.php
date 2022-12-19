<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Images extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Images_model', 'images_md');
    }

    public function index()
    {
        $data['title'] = 'Images List';

        $images = new Images_model();

        $data['lists'] = $images->select_all();

        $this->load->admin('images/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('path', 'Photo','required');
            $this->form_validation->set_rules('product_id', 'Product','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('images/create');
            }

            $request_data = [
                'path' => $this->security->xss_clean($this->input->post('path')),
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'main' => $this->security->xss_clean($this->input->post('main'))
            ];

            $insert_id = $this->images_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/images');
            }
        }

        $data['title'] = 'images List';

        $this->load->admin('images/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('path', 'Photo','required');
            $this->form_validation->set_rules('product_id', 'Product','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('images/create');
            }

            $request_data = [
                // 'path' => $this->security->xss_clean($this->input->post('path')),
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'main' => $this->security->xss_clean($this->input->post('main'))
            ];

            $affected_rows = $this->images_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/images');
            }
        }

        $item = $this->images_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/images');
        }

        $data['item'] = $item;

        $data['title'] = 'Image Edit';

        $this->load->admin('images/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->images_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted!');
            redirect('backend/images/delete/' . $id);
        }

        redirect('backend/images');
    }
}
