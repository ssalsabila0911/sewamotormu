<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Pastikan user sudah login, jika tidak, redirect ke login page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Mdashboard');
        $this->load->model('Mcustomer');
        $this->load->model('Mmotor');
    }
    
        public function index() {
            // Mengambil data jumlah sewa, motor, dan user
            $data['jumlah_sewa'] = $this->Mdashboard->jumlah_sewa();
            $data['jumlah_motor'] = $this->Mdashboard->jumlah_motor();
            $data['jumlah_user'] = $this->Mdashboard->jumlah_user();
    
            $data['jumlah_user_jk'] = $this->Mcustomer->jumlah_user_jk();
            $data['jumlah_motor_status'] = $this->Mmotor->jumlah_motor_status();


            $this->load->view('base/header');
            $this->load->view('dashboard', $data); // Mengirim data ke view
            $this->load->view('base/footer');
        }
    }
    

?>
