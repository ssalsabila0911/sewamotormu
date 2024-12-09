<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mmotor');
    }

    public function checkout($plat = "") {
        $plat_motor = urldecode($plat);
        // Mendapatkan detail motor dari model
        $data["motor"] = $this->Mmotor->detail($plat);

        // Menampilkan view checkout
        $this->load->view('base/header');
        $this->load->view('checkout', $data);
        $this->load->view('base/footer');
    }

}