<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msewa extends CI_Model {

    public function dataSewa() {
        $this->db->select('sewa.id_sewa, user.nama as nama_customer, motor.motor, motor.merk, sewa.tgl_sewa, sewa.tgl_kembali, sewa.total, sewa.status_bayar, sewa.status_sewa');
        $this->db->from('sewa');
        $this->db->join('user', 'user.id_user = sewa.id_user'); // Menghubungkan dengan tabel user
        $this->db->join('motor', 'motor.id_motor = sewa.id_motor'); // Menghubungkan dengan tabel motor
        return $this->db->get()->result_array(); 
    }
}
