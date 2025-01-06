<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmotor extends CI_Model {

    public function dataMotor() {
        return $this->db->get('motor')->result_array(); // Mengambil semua data sebagai array
    }

    public function tambahMotor($data) {
        $this->db->insert('motor', $data); // Menambah data motor ke tabel
    }

    function getMotorById($id_motor) {
    	$this->db->where("id_motor", $id_motor);
    	return $this->db->get("motor")->row_array();
    }

    public function updateMotor($id_motor, $data) {
        $this->db->where('id_motor', $id_motor);
        $this->db->update('motor', $data); 
    }
        
    public function hapusMotor($id_motor) {
        $this->db->where('id_motor', $id_motor);
        $this->db->delete('motor');
    }

    function jumlah_motor_status(){
        $q = $this->db->query("SELECT COUNT(*) as jumlah, status FROM `motor` GROUP BY status");
        $d = $q->result_array();

        return $d;
    }


}
