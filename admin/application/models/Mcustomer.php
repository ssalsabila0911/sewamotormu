<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomer extends CI_Model {

    // Ambil semua data motor dari database
    public function dataCustomer() {
        return $this->db->get('user')->result_array(); 
    }
}
?>
