<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('Home');
    }
    
    public function sobre() {
        $this->load->view('Sobre');
    }

    public function servicos() {
    	$this->load->view('Servicos');
    }



}
