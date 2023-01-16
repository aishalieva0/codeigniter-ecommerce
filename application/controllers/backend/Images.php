<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Images extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Images_model', 'images_md');
        $this->load->model('Products_model', 'products_md');

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

            $this->form_validation->set_rules('path', 'Photo', 'required');
            $this->form_validation->set_rules('product_id', 'Product', 'required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('images/create');
            }

            $upload_path = 'upload/';

            if (!file_exists("upload")) {
                mkdir("upload");
            }
            if (!file_exists($upload_path)) {
                mkdir($upload_path);
            }

            $config['upload_path']   = $upload_path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = FALSE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('path')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data = $this->upload->data();;
            }

            $request_data = [
                'path' => $upload_path . $file_data['file_name'],
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
        $products = new Products_model;
        $data['products'] = $products->select_all();

        $this->load->admin('images/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $path = $this->input->post('path');
            $new_path = $_FILES["path"]["tmp_name"];

            $this->load->library('form_validation');

            $this->form_validation->set_rules('path', 'Photo', 'required');
            $this->form_validation->set_rules('product_id', 'Product', 'required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('images/edit');
            }

            $request_data = [
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'main' => $this->security->xss_clean($this->input->post('main'))
            ];
            if ($new_path) {
                $upload_path = 'upload/';

                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('path')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data = $this->upload->data();
                    $request_data['path'] = $upload_path . $file_data['file_name'];
                }
            }
            $affected_rows = $this->images_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
            }
            redirect('backend/images');
        }

        $item = $this->images_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/images');
        }

        $data['item'] = $item;

        $data['title'] = 'Image Edit';
        
        $products = new Products_model;
        $data['products'] = $products->select_all();

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
