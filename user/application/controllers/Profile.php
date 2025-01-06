<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mprofile');
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    function index(){
        $id = $this->session->userdata('id_user');
        if ($id) {
            $data["user"] = $this->Mprofile->tampil($id);
        } else {
            $data["user"] = null;
        }
        
        $this->load->view('base/header');
        $this->load->view('profile', $data);
        $this->load->view('base/footer');
    }

    // Fungsi untuk halaman Edit Profil
    function edit() {
        $id = $this->session->userdata('id_user');
        if ($id) {
            $data["user"] = $this->Mprofile->tampil($id);
        } else {
            $data["user"] = null;
        }

        // Memuat view edit profile
        $this->load->view('base/header');
        $this->load->view('edit_profile', $data);
        $this->load->view('base/footer');
    }

    // Fungsi untuk menyimpan perubahan profil
    function update() {
        $id = $this->session->userdata('id_user');
        if ($id) {
            // Mengambil data dari form
            $user_data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_tlp' => $this->input->post('no_tlp'),
                'jenkel' => $this->input->post('jenkel'),
                'alamat' => $this->input->post('alamat')
            );

            // Update data pengguna
            $this->Mprofile->update($id, $user_data);

            $this->session->set_flashdata('pesan_sukses', 'Profile anda telah berhasil diubah!');
            redirect('profile'); // Redirect ke halaman profil setelah update
        }
    }
}
