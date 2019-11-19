<?php

class Usuario_model extends CI_Model {

    public function cadUsuario($data) {
        $this->db->insert('usuario', $data);
        return $this->db->insert_id();
    }

    public function get_one_login($email, $senha) {
        $this->db->select('usuario.*');
        $this->db->from('usuario');
        $this->db->where('usuario.email', $email);
        $this->db->where('usuario.senha', sha1($senha));
        $data = $this->db->get();
        return $data->row(0);
    }

    public function logged() {
        $logged = $this->session->userdata('logged');
        if (!isset($logged) || $logged != TRUE) {
            return false;
        } else {
            return true;
        }
    }

}
