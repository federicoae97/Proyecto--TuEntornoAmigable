<?php

class DashboardController {
    
     public function __construct() {
       require_once "./model/PacientesModel.php";
   }
   
    public function index() {       
        $pacientes = new Pacientes_Model();
        $data["pacientes"] = $pacientes->get_pacientes();
        require_once "./views/dashboard/dashboard.php";
    }
}
