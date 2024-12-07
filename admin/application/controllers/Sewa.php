<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index() {
        $data['active_page'] = 'data_sewa';  // Menandakan menu aktif adalah data sewa
        $data['main_content'] = 'sewa';  // Menentukan view yang akan ditampilkan

        $this->load->view('base/sidebar', $data);
        $this->load->view('data_sewa', $data);  // Memuat layout dengan konten utama
    }
}
?>
