<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blogs_model', 'blogs_md');
    }

    public function index()
    {
        $data['title'] = 'Blogs List';

        $blogs = new Blogs_model();

        $data['lists'] = $blogs->select_all();

        $this->load->admin('blogs/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('content', 'Content','required');
          


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('blogs/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'desc' => $this->security->xss_clean($this->input->post('desc')),
                'image' => $this->security->xss_clean($this->input->post('image')),
                'video' => $this->security->xss_clean($this->input->post('video')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->blogs_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/blogs');
            }
        }

        $data['title'] = 'Blogs List';

        $this->load->admin('blogs/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('content', 'Content','required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('blogs/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'desc' => $this->security->xss_clean($this->input->post('desc')),
                'image' => $this->security->xss_clean($this->input->post('image')),
                'video' => $this->security->xss_clean($this->input->post('video')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->blogs_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/blogs');
            }
        }

        $item = $this->blogs_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/blogs');
        }

        $data['item'] = $item;

        $data['title'] = 'Blog Edit';

        $this->load->admin('blogs/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->blogs_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/blogs/delete/' . $id);
        }

        redirect('backend/blogs');
    }
}
