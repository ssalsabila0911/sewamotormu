<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomer extends CI_Model {

    // Ambil semua data motor dari database
    public function dataCustomer() {
        return $this->db->get('user')->result_array(); 
    }

    function detail_customer($id_user) {
        $this->db->where("user.id_user", $id_user);
        $this->db->join("sewa", "sewa.id_user = user.id_user", "left");
        $customer = $this->db->get("user")->row_array();
    
        return $customer;
    }

    function jumlah_user_jk(){
        $q = $this->db->query("SELECT COUNT(*) as jumlah, jenkel FROM `user` GROUP BY jenkel");
        $d = $q->result_array();

        return $d;
    }
    
}
?>
