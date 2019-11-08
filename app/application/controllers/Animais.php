<?php

class Animais extends CI_Controller {

    public function gatos() {
        $this->load->view('Gatos');
    }

    public function cachorros() {
        $this->load->view('Cachorros');
    }

}
