<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function user()
    {
        $data['title'] = 'User List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'userlist');
        $data['userlist'] = $this->userlist->getUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/user', $data);
        $this->load->view('templates/footer');
    }

    public function adduser()
    {
        $data['title'] = 'Add User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('institution', 'Institution', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/adduser', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $institution = $this->input->post('institution');
            $email = $this->input->post('email');
            $passsword = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $is_active = 1;

            $this->db->set('name_user', $name);
            $this->db->set('institution_user', $institution);
            $this->db->set('email', $email);
            $this->db->set('password', $passsword);
            $this->db->set('is_active', $is_active);
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New user added!</div>');
            redirect('menu/user');
        }
    }

    public function document()
    {
        $data['title'] = 'Document List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'doclist');
        $data['doclist'] = $this->doclist->getDocument();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/document', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $data['title'] = 'Upload Document';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/upload', $data);
            $this->load->view('templates/footer');
        } else {
            $title = $this->input->post('title');

            //cek jk ada file yg akan diupload
            $upload_doc = $_FILES['document']['name'];

            if ($upload_doc) {
                $config['allowed_types'] = 'txt|pdf';
                $config['max_size']     = '0';
                $config['upload_path'] = './files/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('document')) {
                    $new_doc = $this->upload->data('file_name');
                    $this->db->set('file_document', $new_doc);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('title_document', $title);
            $this->db->insert('document');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New document has been uploaded</div>');
            redirect('menu/document');
        }
    }
}
