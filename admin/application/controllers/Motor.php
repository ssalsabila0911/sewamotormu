<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mmotor');
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index(){

        $data['motors'] = $this->Mmotor->dataMotor();
        $this->load->view('base/header'); 
        $this->load->view('data_motor', $data);
        $this->load->view('base/footer');
    }
}
?>
