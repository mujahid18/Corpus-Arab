<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Engine extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Search';

        $this->load->view('templates/mach_header', $data);
        $this->load->view('engine/index', $data);
        $this->load->view('templates/mach_footer');
    }
}
