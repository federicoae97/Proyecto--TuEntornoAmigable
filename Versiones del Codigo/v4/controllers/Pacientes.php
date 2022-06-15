<?php

class PacientesController {

    public function __construct() {
        require_once "./model/PacientesModel.php";
    }

    public function index() {

        $pacientes = new Pacientes_Model();
        $data["pacientes"] = $pacientes->get_pacientes();

        require_once "./views/pacientes/pacientes.php";
    }

    public function nuevo() {
        require_once "./model/PacientesModel.php";
        $pacientes = new Pacientes_Model();
        $data["pacientes"] = $pacientes->get_pacientes();

        require_once "./views/pacientes/pacientes.php";
    }

    public function guarda() {

        $p_id = NULL;
        $p_nombre = $_POST['p_nombre'];
        $p_apellido = $_POST['p_apellido'];
        $p_genero = $_POST['p_genero'];
        $p_edad = $_POST['p_edad'];

        $pacientes = new Pacientes_Model();
        $pacientes->insertar($p_id, $p_nombre, $p_apellido, $p_genero, $p_edad);
        $this->index();
    }

    public function modificar($p_id) {
        $pacientes = new Pacientes_Model();
        $data["id"] = $p_id;
        $data["pacientes"] = $pacientes->get_paciente($p_id);
        require_once "./views/pacientes/pacientes_modifica.php";
    }

    public function actualizar() {

        $p_id = $_POST['p_id'];
        $p_nombre = $_POST['p_nombre'];
        $p_apellido = $_POST['p_apellido'];
        $p_genero = $_POST['p_genero'];
        $p_edad = $_POST['p_edad'];

        $pacientes = new Pacientes_Model();
        $pacientes->modificar($p_id, $p_nombre, $p_apellido, $p_genero, $p_edad);
        $this->index();
    }

    public function eliminar($p_id) {
        $pacientes = new Pacientes_Model();
        $pacientes->eliminar($p_id);
        $this->index();
    }

    public function guardasin() {
        $pacientes = new Pacientes_Model();
        $data = explode(",", $_POST["arrayDatos"]);
        $id_pce = $_POST["idsenal"];
        $registro_actual = 1;
        $sentencia_valores="";
        foreach ($data as $valor) {
            //Contabilizar los registros
            if ($valor == "/") {
                if($registro_actual!=1) {
                    $pacientes->insertar_documento(ltrim($sentencia_valores, ','),$id_pce); 
                    $sentencia_valores = "";
                }
                $registro_actual += 1;
            }
            //No tener en cuenta el encabezado del archivo
            if ($registro_actual != 1 && $valor != "/") {
                $sentencia_valores .= ",'" . $valor . "'";
            }
        };

        // INSERT INTO `senal`  VALUES ('', '', '', '', '', '', '', '', '', '', '')
        echo "<pre>";
        print_r("TERMINA");
        die;
        $this->index();
    }

}
