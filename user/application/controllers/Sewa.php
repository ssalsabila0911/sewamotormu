<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Mmotor');
        $this->load->model('Msewa');
    }

    public function checkout($id_motor) {
        // Pastikan user sudah login
        if ($this->session->userdata('logged_in')) {
            // Ambil detail motor berdasarkan ID
            $motor = $this->Mmotor->detail($id_motor);
    
            // Cek apakah motor tersedia
            if ($motor['status'] != 'Tersedia') {
                // Jika motor tidak tersedia, arahkan ke halaman yang sesuai atau beri pesan error
                echo "Motor ini sedang tidak tersedia untuk disewa.";
                return; // Berhenti jika motor tidak tersedia
            }
    
            // Jika motor tersedia, lanjutkan ke halaman checkout
            $data['motor'] = $motor;
    
            $this->load->view('base/header');
            $this->load->view('checkout', $data); // Tampilan checkout
            $this->load->view('base/footer');
        } else {
            redirect('login');
        }
    }
    

    public function proses_sewa() {
        // Data yang dikirim dari form checkout
        $data = [
            'id_user'       => $this->session->userdata('logged_in'), // Ambil ID user dari session
            'id_motor'      => $this->input->post('id_motor'),
            'tgl_sewa'      => date('Y-m-d'), // Tanggal hari ini
            'tgl_kembali'   => date('Y-m-d', strtotime('+' . $this->input->post('lama_sewa') . ' days')), // Tambah lama sewa
            'status_bayar'  => 'Belum Dibayar',
            'notifikasi'    => 'Belum',
            'NIK'           => $this->input->post('nik'),
            'total'         => $this->input->post('harga') * $this->input->post('lama_sewa'), // Harga x Lama Sewa
            'status_sewa'   => 'Aktif'
        ];
    
        // Masukkan data ke tabel sewa
        $this->Msewa->insert($data);
    
        // Update status motor menjadi 'Disewa' setelah berhasil disewa
        $this->Mmotor->update_status_motor($data['id_motor'], 'Disewa');
    
        // Redirect ke halaman sukses atau halaman lain
        redirect('sewa/sukses');
    }
    

    public function sukses() {
        $this->load->view('base/header');
        $this->load->view('sewa_sukses');
        $this->load->view('base/footer');
    }
}
