<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofile extends CI_Model {
    function tampil($id) {
    	$this->db->where("id_user", $id);
    	return $this->db->get("user")->row_array();
    }
}