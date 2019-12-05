<?php

class Animal_model extends CI_Model {

    public function cadAnimal($data) {
        $this->db->insert('animal', $data);
        return $this->db->insert_id();
    }

    public function getEspecies() {
        $query = $this->db->get('especie');
        return $query->result_object();
    }

    public function getRacas() {
        $query = $this->db->get('raca');
        return $query->result();
    }

    public function getRacasByEspecie($especie) {
        $this->db->where('idEspecie',$especie);                 
        $query = $this->db->get('raca');
        return $query->result_object();
    }

}
