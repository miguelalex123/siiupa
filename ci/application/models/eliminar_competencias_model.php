<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class eliminar_competencias_model extends CI_Model {
    public function cargar(){
        $this->db->select("*");
        $this->db->from("competencias");
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    public function eliminar($aux){
        $this->db->where('competencia',$aux);
        $this->db->delete('competencias');
    }
}
