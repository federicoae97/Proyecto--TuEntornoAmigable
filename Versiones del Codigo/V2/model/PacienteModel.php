<?php

class Paciente_Model {

    private $db;
    private $paciente;

    public function __construct() {

        $this->db = Conectar::conexion();
        $this->paciente = array();
    }

    
    public function get_paciente($p_id) {
        $sql = "SELECT * FROM paciente WHERE p_id='$p_id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }

}
