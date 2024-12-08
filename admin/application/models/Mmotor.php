<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmotor extends CI_Model {

    // Ambil semua data motor dari database
    public function dataMotor() {
        return $this->db->get('motor')->result_array(); // Mengambil semua data sebagai array
    }
}
?>
