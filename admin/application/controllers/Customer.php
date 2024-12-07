<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index() {
        $data['active_page'] = 'data_customer';  // Menandakan menu aktif adalah data customer
        $data['main_content'] = 'customer';  // Menentukan view yang akan ditampilkan

        $this->load->view('base/sidebar', $data);
        $this->load->view('data_customer', $data);  // Memuat layout dengan konten utama
    }
}
?>
