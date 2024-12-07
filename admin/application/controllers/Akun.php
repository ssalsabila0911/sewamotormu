<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Madmin'); 
        $this->load->library('session'); 
    }

    public function proses_login() {
        // Ambil data dari form
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Persiapkan data array untuk dikirim ke model
        $inputan = array('email' => $email, 'password' => $password);

        // Panggil metode login di model
        $admin = $this->Madmin->login($inputan);

        if ($admin) {
            // Set session jika login berhasil
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('admin_id', $admin['id_admin']);
            $this->session->set_userdata('email', $admin['email']);

            // Redirect ke dashboard
            redirect('dashboard');
        } else {
            // Jika login gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Email atau Password salah');
            redirect('welcome');
        }
    }

    // Logout
    public function logout() {
        // Unset semua data session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('email');

        // Redirect ke halaman login setelah logout
        redirect('login');
    }
}
?>
