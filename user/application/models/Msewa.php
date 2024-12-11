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
}
