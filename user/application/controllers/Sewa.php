<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Mmotor');
        $this->load->model('Msewa');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
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
            $this->session->set_flashdata('popup_message', 'NIK yang anda masukkan telah digunakan untuk sewa yang masih berjalan. Selesaikan sewa sebelumnya sebelum menggunakan NIK ini lagi atau gunakan NIK lain.');
            redirect('sewa/checkout/' . $id_motor);
            return; // Hentikan proses jika NIK tidak valid
        }
        
        // Data untuk disimpan ke tabel sewa
        $data_sewa = [
            'id_user'       => $this->session->userdata('id_user'),
            'id_motor'      => $id_motor,
            'tgl_sewa'      => date('Y-m-d'), 
            'lama_sewa_hari'=> $lama_sewa,
            'tgl_kembali'   => date('Y-m-d', strtotime('+' . $lama_sewa . ' days')), // Tambah lama sewa
            'status_bayar'  => 'Belum Dibayar',
            'notifikasi'    => 'Belum',
            'NIK'           => $nik,
            'total'         => $harga * $lama_sewa, // Harga x Lama Sewa
            'status_sewa'   => 'Aktif'
        ];
    
        // Masukkan data ke tabel sewa
        $id_sewa = $this->Msewa->insert($data_sewa); // Simpan dan dapatkan ID sewa yang baru dimasukkan
    
        // Simpan data ke tabel detail_sewa
        $data_detail_sewa = [
            'id_sewa'       => $id_sewa,  // ID sewa yang baru saja dimasukkan
            'id_motor'      => $id_motor,
            'id_user'       => $this->session->userdata('id_user'),
            'status_bayar'   => 'Belum Dibayar',
            'total'         => $harga * $lama_sewa,  // Total harga
            'tgl_sewa'      => date('Y-m-d'),
            'tgl_kembali'   => date('Y-m-d', strtotime('+' . $lama_sewa . ' days'))
        ];
    
        // Simpan data ke tabel detail_sewa
        $this->db->insert('detail_sewa', $data_detail_sewa);
    
        // Update status motor menjadi 'Disewa'
        $this->Mmotor->update_status_motor($id_motor, 'Disewa');
    
        $this->session->set_flashdata('pesan_sukses', 'Sewa berhasil. Silakan lakukan pembayaran!');
        // Redirect ke halaman riwayat dengan parameter notifikasi
        redirect('sewa/detail_sewa/' . $id_sewa);
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
    function detail_sewa($id_sewa) {
    
        $data["sewa"] = $this->Msewa->detail_sewa($id_sewa);

        $snapToken = "";
        $data["cekmidtrans"] = array();

        if ($data['sewa']['status_bayar']=="Belum Dibayar"){

        
            include 'midtrans-php/Midtrans.php';

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-8ZJ0TVYrmgbUHYhW19lbkNtR';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 10000,
                )
            );
            $params['transaction_details']['order_id'] = $data["sewa"]["id_sewa"];
            $params['transaction_details']['gross_amount'] = $data["sewa"]["total"];

            
            try {
                $snapToken = \Midtrans\Snap::getSnapToken($params);
            } catch (Exception $e){

            }

            $data["snapToken"] = $snapToken;


            // cek midtrans
            $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/".$data["sewa"]["id_sewa"]."/status",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Basic U0ItTWlkLXNlcnZlci04WkowVFZZcm1nYlVIWWhXMTlsYmtOdFI6c3lpZmFzYWxzYTExMDk="
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
            //echo $response;
                $responsi = json_decode($response, TRUE);
                if (isset($responsi['status_code']) && in_array($responsi["status_code"], [200,201])  ) {
                    $data["cekmidtrans"] = $responsi;

                    if ($responsi['transaction_status']=='settlement') {
                        $this->Msewa->set_lunas($id_sewa);
                        redirect('sewa/detail_sewa/'.$id_sewa,'refresh');
                    }
                }
            }
        }

        $this->load->view('base/header');
        $this->load->view('detail_sewa', $data);
        $this->load->view('base/footer');
    }
    
}
