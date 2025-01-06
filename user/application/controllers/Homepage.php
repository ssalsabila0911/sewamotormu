<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function index() {
        // Pastikan user sudah login sebelum mengakses halaman ini
        if ($this->session->userdata('logged_in')) {

            $this->load->model('Mmotor');
            $data['motors'] = $this->Mmotor->dataMotor(4);

            $this->load->view('base/header');
            $this->load->view('homepage', $data);
            $this->load->view('base/footer');
        } else {
            // Jika user belum login, redirect ke halaman login
            redirect('login');
        }
    }
}
