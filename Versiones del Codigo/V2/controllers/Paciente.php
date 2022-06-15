<?php

class PacienteController {
    
   public function __construct() {
       require_once "./model/PacientesModel.php";
   }
    public function index() {
        
        $paciente = new Pacientes_Model();
        $data["pacientes"] = $paciente->get_pacientes();
        
        require_once "./views/paciente/paciente.php";
    }

}
