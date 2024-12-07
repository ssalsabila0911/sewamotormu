<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Pastikan user sudah login, jika tidak, redirect ke login page
        if (!$this->session->userdata('logged_in')) {
            redirect('akun/login');
        }
    }

    public function index() {
        // Set data untuk menentukan halaman aktif dan konten utama
        $data['active_page'] = 'dashboard';  // Menandakan menu aktif adalah dashboard
        $data['main_content'] = 'dashboard'; // Menentukan view yang akan ditampilkan

        // Memuat layout, sidebar dan konten utama
        $this->load->view('base/sidebar', $data); 
        $this->load->view('dashboard', $data);
    }
}
?>
