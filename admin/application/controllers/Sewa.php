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
        $sewa = $this->Msewa->detail_sewa($id_sewa);

        $isipesan ="Dear penyewa ".$sewa["nama"]."<br>";
        $isipesan.="Saat ini masa sewa anda untuk motor ".$sewa['motor']." dengan nomor ".$sewa['plat_motor']." sudah hampir habis.<br>";
        $isipesan.="Silahkan kembalikan sebelum tanggal masa sewa habis ! <br>";
        $isipesan.="- Admin sewamotormu - <br>";

        $payload['data'][0]['phone'] = $sewa['no_tlp']; 
        $payload['data'][0]['message'] = $isipesan;

        $curl = curl_init();
        $token = $this->config->item("token_wablas");
        curl_setopt($curl, CURLOPT_HTTPHEADER, 
            array(
                "Authorization: U629wUFHi7AyhykPeWhIQD4DUaO1hEKa7jOvI6yZHHIlMI58Y2aZbmUCBW0iWOP3", 
                "Content-Type: application/json"
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
        curl_setopt($curl, CURLOPT_URL, "https://jogja.wablas.com/api/v2/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);

        $this->Msewa->set_notif($id_sewa);
        $this->session->set_flashdata('pesan_sukses', 'Notifikasi Berhasil Dikirim !');
        redirect('sewa','refresh');
    }
}
