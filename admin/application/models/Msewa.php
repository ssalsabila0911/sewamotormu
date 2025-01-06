<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msewa extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('Msewa'); 
        $this->load->library('session'); 
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); 
        }
    }
    public function dataSewa() {
        $this->db->select('sewa.id_sewa, user.nama as nama_customer, motor.motor, motor.plat_motor, sewa.tgl_sewa, sewa.tgl_kembali, sewa.total, sewa.status_bayar, sewa.status_sewa');
        $this->db->from('sewa');
        $this->db->join('user', 'user.id_user = sewa.id_user'); // Menghubungkan dengan tabel user
        $this->db->join('motor', 'motor.id_motor = sewa.id_motor'); // Menghubungkan dengan tabel motor
        return $this->db->get()->result_array(); 
    }

    function set_selesai($id_sewa) {
        // Update status sewa menjadi selesai
        $this->db->where('id_sewa', $id_sewa);
        $this->db->set('status_sewa', 'Selesai');
        $this->db->update('sewa');
        
        // Ambil id_motor yang terkait dengan id_sewa untuk memperbarui status motor
        $this->db->select('id_motor');
        $this->db->from('sewa');
        $this->db->where('id_sewa', $id_sewa);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $id_motor = $row->id_motor;
    
            // Update status motor menjadi 'Tersedia'
            $this->db->where('id_motor', $id_motor);
            $this->db->set('status', 'Tersedia');
            $this->db->update('motor');
        }
    }

    function detail_sewa($id_sewa) {
        $this->db->where("sewa.id_sewa", $id_sewa);
        $this->db->join("sewa","detail_sewa.id_sewa=sewa.id_sewa","left");
        $this->db->join("user","detail_sewa.id_user=user.id_user","left");
        $this->db->join("motor","detail_sewa.id_motor=motor.id_motor","left");
        $sewa = $this->db->get("detail_sewa")->row_array();

        return $sewa;
    }

    function set_notif($id_sewa){
        $this->db->where('id_sewa', $id_sewa);
        $this->db->set('notifikasi', 'Sudah');
        $this->db->update('sewa');
    }
    
}
