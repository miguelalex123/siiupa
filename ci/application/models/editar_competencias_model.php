<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class editar_competencias_model extends CI_Model {
    public function cargar($aux){
        $this->db->select("competencia");
        $this->db->from("competencias");
        $this->db->where("competencias.competencia",$aux);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : "";
    }

    public function editar($competencia,$cuatrimestre,$especialidad){
        $aux = array('competencia' => $competencia,'cuatrimestre' => $cuatrimestre,'especialidad' => $especialidad);
        $this->db->where('competencia',$competencia);
        $this->db->update('competencias',$aux);
    }
}
