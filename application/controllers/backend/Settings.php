<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings_model', 'settings_md');
    }

    public function index()
    {
        $data['title'] = 'Settings List';

        $settings = new Settings_model();

        $data['lists'] = $settings->select_all();

        $this->load->admin('settings/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('_key', 'key','required');
            $this->form_validation->set_rules('value', 'Value','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('settings/create');
            }

            $request_data = [
                '_key' => $this->security->xss_clean($this->input->post('_key')),
                'value' => $this->security->xss_clean($this->input->post('value')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->settings_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Added successfully !');

                redirect('backend/settings');
            }
        }

        $data['title'] = 'Settings List';

        $this->load->admin('settings/create', $data);
    }

    public function edit($id)
    {

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('_key', 'key','required');
            $this->form_validation->set_rules('value', 'Value','required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->admin('settings/create');
            }

            $request_data = [
                '_key' => $this->security->xss_clean($this->input->post('_key')),
                'value' => $this->security->xss_clean($this->input->post('value')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->settings_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'All records has been changed successfully !');
                
                redirect('backend/settings');
            }
        }

        $item = $this->settings_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'This record is not found.');

            redirect('backend/settings');
        }

        $data['item'] = $item;

        $data['title'] = 'Settings Edit';

        $this->load->admin('settings/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $affected_rows = $this->settings_md->delete($id);

        if ($affected_rows > 0) {
            $this->session->set_flashdata('success_message', 'Deleted');
            redirect('backend/settings/delete/' . $id);
        }

        redirect('backend/settings');
    }
}
