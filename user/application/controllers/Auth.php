<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // Halaman login
    public function login() {
        // Menampilkan halaman login
        $this->load->view('login');
    }

    // Proses login
    public function proses_login() {
        $this->load->model('Muser');
        
        // Ambil input email dan password dari form
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        // Cek apakah pengguna ada di database dan verifikasi password
        $user = $this->Muser->login($email, $password);
        
        if ($user) {
            // Set session data untuk user
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('user_id', $user['id']);
            $this->session->set_userdata('email', $user['email']);
            $this->session->set_userdata('nama', $user['nama']); // Menyimpan nama pengguna
        
            // Arahkan ke halaman home
            redirect('homepage');
        } else {
            // Jika login gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Invalid login credentials');
            redirect('login');
        }
    }
    
    public function logout() {
        // Hapus semua data session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        
        // Redirect ke halaman login setelah logout
        redirect('welcome');
        
    }
    

    // Halaman registrasi
    public function register() {
        $this->load->view('register');
    }
}