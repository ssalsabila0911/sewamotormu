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

        // Fungsi login
    public function login($email, $password) {
        // Cek apakah email ada di database
        $query = $this->db->get_where('user', ['email' => $email]);
        
        if ($query->num_rows() > 0) {
            $user = $query->row_array();
            
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                return $user;  // Kembalikan data user jika password cocok
            }
        }
        
        return false;  // Return false jika login gagal
    }
}