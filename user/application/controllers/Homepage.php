<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    // Fungsi untuk menampilkan halaman utama (homepage)
    public function index() {
        // Pastikan user sudah login sebelum mengakses halaman ini
        if ($this->session->userdata('logged_in')) {
            // Load header, main content, dan footer
            $this->load->view('base/header');  // Menampilkan header
            $this->load->view('homepage');         // Menampilkan konten homepage
            $this->load->view('base/footer');  // Menampilkan footer
        } else {
            // Jika user belum login, redirect ke halaman login
            redirect('auth/login');
        }
    }
}
