<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

    public function login($inputan) {
        $email = $inputan['email']; // Asumsi menggunakan email, bukan username
        $password = sha1($inputan['password']); // Enkripsi password dengan sha1 untuk mencocokkan dengan hash di database

        // Cek apakah admin ada di database
        $this->db->where('email', $email);  // Gunakan email untuk pencocokan
        $this->db->where('password', $password);  // Bandingkan password yang sudah di-hash
        $q = $this->db->get('admin');
        $cekadmin = $q->row_array(); // Ambil data admin

        if (!empty($cekadmin)) {
            // Set session jika login berhasil
            $this->session->set_userdata('id_admin', $cekadmin['id_admin']);
            $this->session->set_userdata('email', $cekadmin['email']);
            return $cekadmin;  // Kembalikan data admin jika ditemukan
        } else {
            return false;  // Kembalikan false jika admin tidak ditemukan
        }
    }
}
?>
