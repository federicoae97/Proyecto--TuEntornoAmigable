<?php
class Conectar {
    public static function conexion() {
        $conexion = new mysqli("localhost", "root", "", "tea");
        return $conexion;
    }

}