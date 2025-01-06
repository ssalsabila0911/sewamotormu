<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mmotor');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }
    public function index() {
        // Pastikan user sudah login sebelum mengakses halaman ini
        if ($this->session->userdata('logged_in')) {

            $data['motors'] = $this->Mmotor->dataMotor();

            $this->load->view('base/header');
            $this->load->view('motor_list', $data);
            $this->load->view('base/footer');
        } else {
            // Jika user belum login, redirect ke halaman login
            redirect('login');
        }
    }
    function detail_motor($id) {

        $data["motor"] = $this->Mmotor->detail($id);
        $this->load->view('base/header');
        $this->load->view('motor_detail', $data);
        $this->load->view('base/footer');

    }
    
}