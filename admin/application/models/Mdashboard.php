<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdashboard extends CI_Model {

    public function jumlah_sewa() {
        $this->db->select('COUNT(*) as jumlah_sewa');
        $query = $this->db->get('sewa');
        return $query->row_array();
    }

    public function jumlah_motor() {
        $this->db->select('COUNT(*) as jumlah_motor');
        $query = $this->db->get('motor');
        return $query->row_array();
    }

    public function jumlah_user() {
        $this->db->select('COUNT(*) as jumlah_user');
        $query = $this->db->get('user');
        return $query->row_array();
    }
    
    
}
