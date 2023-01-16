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

            $this->form_validation->set_rules('title', 'Title', 'required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('brands/create');
            }
            $path = 'upload/';

            if (!file_exists("upload")) {
                mkdir("upload");
            }
            if (!file_exists($path)) {
                mkdir($path);
            }

            $config['upload_path']   = $path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = FALSE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data = $this->upload->data();;
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'logo' => $path . $file_data['file_name'],
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
    // if (file_exists($request_data['logo'])) {
    //     unlink($request_data['logo']);
    // }
    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $logo = $this->input->post('logo');
            $new_logo = $_FILES["logo"]["tmp_name"];

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'Title', 'required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('brands/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];
            if ($new_logo) {
                $path = 'upload/';

                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('logo')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data = $this->upload->data();
                    $request_data['logo'] = $path . $file_data['file_name'];
                }
            }
            $affected_rows = $this->brands_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');

                
            }
            redirect('backend/brands');
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
