<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mcustomer');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index(){

        $data['user'] = $this->Mcustomer->dataCustomer();
        $this->load->view('base/header'); 
        $this->load->view('data_customer', $data);
        $this->load->view('base/footer');
    }

    public function detail($id_user){

        $data['customer'] = $this->Mcustomer->detail_customer($id_user);
        $this->load->view('base/header'); 
        $this->load->view('detail_customer', $data);
        $this->load->view('base/footer');
    }
}
?>
