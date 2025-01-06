<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msewa extends CI_Model {
    public function insert($data) {
        $this->db->insert('sewa', $data);
        return $this->db->insert_id(); // Kembalikan ID sewa yang baru dimasukkan
    }
    public function cek_sewa_aktif($id_user) {
        $this->db->where('id_user', $id_user);
        $this->db->where('status_sewa', 'aktif'); 
        $query = $this->db->get('sewa');
        
        if ($query->num_rows() > 0) {
            return true;
        }
        return false; 
    }

    public function cek_nik_aktif($nik) {
        $this->db->where('NIK', $nik);
        $this->db->where('status_sewa', 'Aktif'); 
        $query = $this->db->get('sewa');
        return $query->num_rows() > 0; 
    }
    public function tampilRiwayat($id_user) {
        $this->db->where('id_user', $id_user);
        $this->db->order_by('tgl_sewa', 'DESC');
    
        return $this->db->get("sewa")->result_array(); 
    }
    function detail_sewa($id_sewa) {
        $this->db->where("sewa.id_sewa", $id_sewa);
        $this->db->join("sewa","detail_sewa.id_sewa=sewa.id_sewa","left");
        $this->db->join("user","detail_sewa.id_user=user.id_user","left");
        $this->db->join("motor","detail_sewa.id_motor=motor.id_motor","left");
        $sewa = $this->db->get("detail_sewa")->row_array();

        return $sewa;
    }
    function set_lunas($id_sewa){
        $this->db->where('id_sewa', $id_sewa);
        $this->db->set("status_bayar","Lunas");
        $this->db->update('sewa');
    }
    
}
