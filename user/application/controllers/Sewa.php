<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Mmotor');
        $this->load->model('Msewa');
    }

    public function checkout($id_motor) {

        if ($this->session->userdata('logged_in')) {
            
            $id_user = $this->session->userdata('id_user'); // get id_user dari session
    
            // Cek sewa aktif
            if ($this->Msewa->cek_sewa_aktif($id_user)) {
                // pop-up
                $this->session->set_flashdata('popup_message', 'Anda masih memiliki sewa aktif. Selesaikan sewa sebelumnya sebelum melakukan pemesanan baru.');
                redirect('sewa/riwayat');
                return; 
            }
    
            // get detail motor berdasarkan ID
            $motor = $this->Mmotor->detail($id_motor);
        
            // Cek motor 
            if ($motor['status'] != 'Tersedia') {
                // pop-up
                $this->session->set_flashdata('popup_message', 'Motor ini sedang tidak tersedia untuk disewa.');
                redirect('motor'); 
                return; 
            }
        
            // Jika motor tersedia
            $data['motor'] = $motor;
        
            $this->load->view('base/header');
            $this->load->view('checkout', $data); 
            $this->load->view('base/footer');
        } else {
            redirect('login');
        }
    }
    
    

    public function proses_sewa() {
        // Data dari form checkout
        $nik = $this->input->post('nik');
        $id_motor = $this->input->post('id_motor');
        $lama_sewa = $this->input->post('lama_sewa');
        $harga = $this->input->post('harga');
        
        // Cek apakah NIK sudah digunakan pada sewa aktif
        if ($this->Msewa->cek_nik_aktif($nik)) {
            // Simpan pesan di session flashdata untuk ditampilkan
            $this->session->set_flashdata('popup_message', 'NIK yang anda masukkan telah digunakan untuk sewa yang masih berjalan. Selesaikan sewa sebelumnya sebelum menggunakan NIK ini lagi atau gunakan NIK lain.');
            redirect('sewa/checkout/' . $id_motor);
            return; // Hentikan proses jika NIK tidak valid
        }
        
        // Data untuk disimpan
        $data = [
            'id_user'       => $this->session->userdata('id_user'), // Ambil ID user dari session
            'id_motor'      => $id_motor,
            'tgl_sewa'      => date('Y-m-d'), 
            'tgl_kembali'   => date('Y-m-d', strtotime('+' . $lama_sewa . ' days')), // Tambah lama sewa
            'status_bayar'  => 'Belum Dibayar',
            'notifikasi'    => 'Belum',
            'NIK'           => $nik,
            'total'         => $harga * $lama_sewa, // Harga x Lama Sewa
            'status_sewa'   => 'Aktif'
        ];
    
        // Masukkan data ke tabel sewa
        $this->Msewa->insert($data);
    
        // Update status motor menjadi 'Disewa'
        $this->Mmotor->update_status_motor($id_motor, 'Disewa');
    
        // Redirect ke halaman riwayat dengan parameter notifikasi
        redirect('sewa/riwayat?notif=success');
    }
    
    
    
    public function riwayat() {
        // Pastikan user sudah login
        if ($this->session->userdata('logged_in')) {
            $id_user = $this->session->userdata('id_user');
            
            $data['riwayat_sewa'] = $this->Msewa->tampilRiwayat($id_user);
            
            $this->load->view('base/header');
            $this->load->view('riwayat', $data);
            $this->load->view('base/footer');
        } else {
            redirect('login');
        }
    }
    
}
