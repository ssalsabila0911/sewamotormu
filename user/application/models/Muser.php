<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
    // Fungsi untuk memeriksa apakah email sudah ada
    public function check_email_exists($email) {
        $query = $this->db->get_where('user', ['email' => $email]);
        return $query->num_rows() > 0;  // Jika email ditemukan, return true
    }

    // Fungsi untuk menyimpan data pengguna baru
    public function register($data) {
        return $this->db->insert('user', $data); // Tabel 'user'
    }
}