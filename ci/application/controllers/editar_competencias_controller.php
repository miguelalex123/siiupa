<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class editar_competencias_controller extends CI_Controller {
    public function cargar(){
        $aux = $this->input->post("id");
        $this->load->model('editar_competencias_model');
        $data['competencias'] = $this->editar_competencias_model->cargar($aux);
        $this->load->view('editar_competencias_view', $data);
    }

    public function editar(){
    	$competencia = $this->input->post("competencia");
    	$cuatrimestre = $this->input->post("cuatrimestre");
    	$especialidad = $this->input->post("especialidad");
    	$this->load->model("editar_competencias_model");
    	$this->editar_competencias_model->editar($competencia,$cuatrimestre,$especialidad);
        $url=  base_url();
        $url.= "index.php/eliminar_competencias_controller/cargar";
        redirect($url);
    }
    
}