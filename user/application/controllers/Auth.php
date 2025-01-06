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
            $this->session->set_userdata('id_user', $user['id_user']);
            $this->session->set_userdata('email', $user['email']);
            $this->session->set_userdata('nama', $user['nama']);
        
            $this->session->set_flashdata('pesan_sukses', 'Selamat Datang ! Anda telah berhasil login');
            // Arahkan ke halaman home
            redirect('homepage');
        } else {
            // Jika login gagal, set flash data error
            $this->session->set_flashdata('error', 'Email atau Password Salah. Ulangi Kembali!');
            redirect('login');
        }
    }
    
    
    
    public function logout() {
        // Hapus semua data session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        
        $this->session->set_flashdata('pesan_sukses', 'Anda telah logout');
        // Redirect ke halaman login setelah logout
        redirect('welcome');
        
    }
    // Halaman registrasi
    public function register() {
        $this->load->view('register');
    }
}