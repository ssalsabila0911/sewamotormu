<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmotor extends CI_Model {
    public function dataMotor($limit = 0) {
        $this->db->select('*');
        $this->db->from('motor');

        if ($limit > 0) {
            $this->db->limit($limit); 
        }

        // Eksekusi query dan kembalikan hasilnya sebagai array
        return $this->db->get()->result_array();
    }
}
