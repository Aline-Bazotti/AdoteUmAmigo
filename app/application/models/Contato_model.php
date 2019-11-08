<?php

class Contato_model extends CI_Model {

    public function cadContato($data) {
        $this->db->insert('contato', $data);
        return $this->db->insert_id();
    }

}
