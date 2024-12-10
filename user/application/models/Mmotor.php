<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmotor extends CI_Model {
    public function dataMotor($limit = 0) {

        return $this->db->get("motor",$limit, 0)->result_array();
    }
    function detail($id) {
    	$this->db->where("id_motor", $id);
    	return $this->db->get("motor")->row_array();
    }

    public function update_status_motor($id, $status) {
        $this->db->set('status', $status); 
        $this->db->where('id_motor', $id);
        $this->db->update('motor');
    }
}

