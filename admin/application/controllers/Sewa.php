<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Msewa');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index(){

        $data['sewa'] = $this->Msewa->dataSewa();
        $this->load->view('base/header'); 
        $this->load->view('data_sewa', $data);
        $this->load->view('base/footer');
    }
}
?>
