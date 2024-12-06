<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmotor extends CI_Model {
    public function dataMotor($limit = 0) {

        return $this->db->get("motor",$limit, 0)->result_array();
    }
    function detail($plat) {
    	$this->db->where("plat_motor", $plat);
    	return $this->db->get("motor")->row_array();
    }
}
