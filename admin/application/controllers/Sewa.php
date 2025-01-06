<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Msewa');
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index(){

        $data['sewa'] = $this->Msewa->dataSewa();
        $this->load->view('base/header'); 
        $this->load->view('data_sewa', $data);
        $this->load->view('base/footer');
    }

    public function ubahStatus($id_sewa){
        $this->Msewa->set_selesai($id_sewa);
        $this->session->set_flashdata('pesan_sukses', 'Status sewa berhasil diperbarui.');
        redirect('sewa','refresh');
    }


    public function notifSewa($id_sewa){
        //api disini
}
