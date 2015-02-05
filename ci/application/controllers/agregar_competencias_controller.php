<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class agregar_competencias_controller extends CI_Controller {
    public function cargar(){
        $this->load->view('agregar_competencias_view');
    }

    public function insertar(){
    	$competencia = $this->input->post("competencia");
    	$cuatrimestre = $this->input->post("cuatrimestre");
    	$especialidad = $this->input->post("especialidad");
    	$this->load->model("agregar_competencias_model");
    	$this->agregar_competencias_model->insertar($competencia,$cuatrimestre,$especialidad);
        $url=  base_url();
        $url.= "index.php/eliminar_competencias_controller/cargar";
        redirect($url);
    }
}