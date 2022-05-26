<?php

class Pacientes_Model {

    private $db;
    private $pacientes;

    public function __construct() {

        $this->db = Conectar::conexion();
        $this->pacientes = array();
    }

    public function get_pacientes() {
        $sql = "SELECT * FROM paciente";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->pacientes[] = $row;
        }
        return $this->pacientes;
    }
    
    public function nuevo() {
        $sql = "SELECT * FROM paciente";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->pacientes[] = $row;
        }
        return $this->pacientes;       
        
    } 
    
    public function insertar($p_id, $p_nombre, $p_apellido, $p_genero, $p_edad) {       
        $sql = "INSERT INTO paciente VALUES('$p_id', '$p_nombre', '$p_apellido', '$p_genero', $p_edad)";  
        $resultado = $this->db->query($sql);
        
    } 
    
    public function modificar($p_id, $p_nombre, $p_apellido, $p_genero, $p_edad) {       
        $sql = "UPDATE paciente SET p_id='$p_id', p_nombre = '$p_nombre', p_apellido= '$p_apellido', p_genero= '$p_genero', p_edad = $p_edad WHERE p_id='$p_id'";  
        $resultado = $this->db->query($sql);
        
        
    } 
    
   public function eliminar($p_id) {
        echo $p_id;       
        $sql = "DELETE FROM paciente WHERE p_id='$p_id'";  
        $resultado = $this->db->query($sql);
        
    } 
    
    
    public function get_paciente($p_id) {
        $sql = "SELECT * FROM paciente WHERE p_id='$p_id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }

}
