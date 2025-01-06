<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mmotor');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    // Menampilkan data motor
    public function index() {
        $data['motors'] = $this->Mmotor->dataMotor();
        $this->load->view('base/header');
        $this->load->view('data_motor', $data);
        $this->load->view('base/footer');
    }

    // Menampilkan form tambah data motor
    public function tambah() {
        $this->load->view('base/header');
        $this->load->view('tambah_motor');
        $this->load->view('base/footer');
    }

    // Proses tambah data motor
    public function proses_tambah() {
        // Mengambil inputan form
        $plat = $this->input->post('plat');
        $motor = $this->input->post('motor');
        $merk = $this->input->post('merk');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $deskripsi = $this->input->post('deskripsi');
    
        // Mengupload gambar motor
        $config['upload_path'] = $this->config->item("assets_motor");
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
        } else {
            $gambar = '';  // Jika upload gagal, gambar kosong
        }
    
        // Menyimpan data motor ke dalam array
        $data = array(
            'plat_motor' => $plat,
            'motor' => $motor,
            'merk' => $merk,
            'harga' => $harga,
            'status' => $status,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi
        );
    
        // Memasukkan data ke dalam tabel motor
        $this->Mmotor->tambahMotor($data);
    
        $this->session->set_flashdata('pesan_sukses', 'Data motor berhasil ditambahkan!');
        // Redirect ke halaman data motor setelah berhasil
        redirect('motor');
    }

    // Menampilkan form edit data motor
    public function edit($id_motor) {
        // Mengambil data motor berdasarkan ID
        $data['motor'] = $this->Mmotor->getMotorById($id_motor);
        $this->load->view('base/header');
        $this->load->view('edit_motor', $data);
        $this->load->view('base/footer');
    }

    // Proses edit data motor
    public function proses_edit($id_motor) {
        // Mengambil inputan form
        $plat = $this->input->post('plat');
        $motor = $this->input->post('motor');
        $merk = $this->input->post('merk');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $deskripsi = $this->input->post('deskripsi');
    
        // Mengupload gambar motor jika ada
        $config['upload_path'] = $this->config->item("assets_motor");
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
        } else {
            // Jika tidak upload gambar, gunakan gambar yang lama
            $gambar = $this->input->post('gambar_lama');
        }
    
        // Menyimpan data motor ke dalam array untuk update
        $data = array(
            'plat_motor' => $plat,
            'motor' => $motor,
            'merk' => $merk,
            'harga' => $harga,
            'status' => $status,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi
        );
    
        // Memperbarui data motor berdasarkan ID
        $this->Mmotor->updateMotor($id_motor, $data);
    
        $this->session->set_flashdata('pesan_sukses', 'Data motor berhasil diubah!');
        // Redirect ke halaman data motor setelah berhasil
        redirect('motor');
    }
    
    
    public function hapus($id_motor) {
        
        $this->Mmotor->hapusMotor($id_motor);
        $this->session->set_flashdata('pesan_sukses', 'Data motor berhasil dihapus!');
        redirect('motor');
    }

}
