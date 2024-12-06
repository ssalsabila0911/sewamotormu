<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index() {
        $data['active_page'] = 'data_motor';  // Menandakan menu aktif adalah data motor
        $data['main_content'] = 'motor';  // Menentukan view yang akan ditampilkan

        $this->load->view('base/sidebar', $data);
        $this->load->view('data_motor', $data);  // Memuat layout dengan konten utama
    }
}
?>
