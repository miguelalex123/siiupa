<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class agregar_competencias_model extends CI_Model {
    public function insertar($competencia,$cuatrimestre,$especialidad){
        $data = ['competencia' => $competencia,'cuatrimestre' => $cuatrimestre,'especialidad' => $especialidad];
        $this->db->insert('competencias', $data);    
    }
}
