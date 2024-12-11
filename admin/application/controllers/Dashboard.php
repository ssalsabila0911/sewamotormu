<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Pastikan user sudah login, jika tidak, redirect ke login page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index() {
        // Memuat layout, sidebar dan konten utama
        $this->load->view('base/header'); 
        $this->load->view('dashboard');
        $this->load->view('base/footer'); 
    }
}
?>
