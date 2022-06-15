<?php

class TablasController {

    public function __construct() {
       require_once "./model/PacientesModel.php";
   }
   
    public function index() {       
        $pacientes = new Pacientes_Model();
        $data["pacientes"] = $pacientes->get_pacientes();
        require_once "./views/tablas/tablas.php";
    }
    
    public function eliminar($p_id) {        
        $pacientes = new Pacientes_Model();
        $pacientes ->eliminar($p_id);
        $this->index();
        
    }
}
