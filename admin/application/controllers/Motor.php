<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mmotor'); // Load model
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index() {
        $data['active_page'] = 'data_motor';  // Menandakan menu aktif adalah data motor
        $data['motor_data'] = $this->Mmotor->dataMotor(); // Ambil data dari model

        $this->load->view('base/sidebar', $data);
        $this->load->view('data_motor', $data);  // Memuat layout dengan data motor
    }
}
?>
