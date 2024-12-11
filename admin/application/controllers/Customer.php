<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mcustomer');
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index(){

        $data['user'] = $this->Mcustomer->dataCustomer();
        $this->load->view('base/header'); 
        $this->load->view('data_customer', $data);
        $this->load->view('base/footer');
    }
}
?>
