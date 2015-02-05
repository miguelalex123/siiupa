<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class eliminar_competencias_controller extends CI_Controller {
    public function cargar(){
        $this->load->model('eliminar_competencias_model');
        $data['competencias'] = $this->eliminar_competencias_model->cargar();
        $this->load->view('eliminar_competencias_view', $data);
    }

    public function eliminar(){
        $aux = $this->input->post('id');
        $this->load->model('eliminar_competencias_model');
        $this->eliminar_competencias_model->eliminar($aux);
        $url=  base_url();
        $url.= "index.php/eliminar_competencias_controller/cargar";
        redirect($url);
    }
}