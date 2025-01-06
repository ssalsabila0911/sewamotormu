<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Muser');
        $this->load->library('form_validation');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        // Set rules untuk form validation
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('no-telp', 'Nomor Telepon', 'required|numeric');

        $this->form_validation->set_message('min_length', 'Password harus terdiri dari minimal 6 karakter.');
    
        if ($this->form_validation->run() == FALSE) {
            // Jika form validation gagal
            $this->load->view('register');
        } else {
            $email = $this->input->post('email', true);
    
            // Cek apakah email sudah terdaftar
            if ($this->Muser->check_email_exists($email)) {
                // Jika email sudah ada, beri pesan error
                $this->session->set_flashdata('error', 'Email sudah terdaftar. Silakan coba email lain.');
                redirect('register');
            } else {
                // Jika email belum terdaftar, lanjutkan proses registrasi
                $data = [
                    'email'    => $this->input->post('email', true),
                    'nama'     => $this->input->post('name', true),
                    'password' => password_hash($this->input->post('password', true), PASSWORD_BCRYPT),
                    'no_tlp'   => $this->input->post('no-telp', true),
                    'alamat'   => null,
                    'jenkel'   => null,
                    'foto'     => null
                ];
    
                if ($this->Muser->register($data)) {
                    // Jika registrasi berhasil
                    $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
                    redirect('login');
                } else {
                    // Jika ada kesalahan saat menyimpan data
                    $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data.');
                    redirect('register');
                }
            }
        }
    }
    
}