<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofile extends CI_Model {

    // Fungsi untuk mengambil data pengguna
    function tampil($id) {
        $this->db->where("id_user", $id);
        return $this->db->get("user")->row_array();
    }

    // Fungsi untuk memperbarui data pengguna
    function update($id, $data) {
        $this->db->where("id_user", $id);
        $this->db->update("user", $data);
    }
}
