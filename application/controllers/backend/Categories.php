<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index()
    {
        $data['title'] = 'Categories List';

        $categories = new Categories_model();

        $data['lists'] = $categories->select_all();

        $this->load->admin('categories/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title', 'required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('categories/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'parent_id' => $this->security->xss_clean($this->input->post('parent_id')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->categories_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/categories');
            }
        }

        $data['title'] = 'Categories List';
        $data['categories'] = $this->categories_md->select_all();

        $this->load->admin('categories/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title', 'required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('categories/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'parent_id' => $this->security->xss_clean($this->input->post('parent_id')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->categories_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
            }
            redirect('backend/categories');
        }

        $item = $this->categories_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/categories');
        }

        $data['item'] = $item;

        $data['title'] = 'Category Edit';
        $data['categories'] = $this->categories_md->select_all();


        $this->load->admin('categories/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->categories_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted!');
            redirect('backend/categories/delete/' . $id);
        }

        redirect('backend/categories');
    }
}
