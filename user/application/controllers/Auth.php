<?php
class Auth extends CI_Controller {
     // Halaman login
     public function login() {
        $this->load->view('login');
    }
     // Halaman registrasi
     public function register() {
        $this->load->view('register');
    }
}