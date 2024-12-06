<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mprofile');
    }

    function index($id="") {
    

        $data["user"] = $this->Mprofile->tampil($id);
        $this->load->view('base/header');
        $this->load->view('profile', $data);
        $this->load->view('base/footer');

    }
}