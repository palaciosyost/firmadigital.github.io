<?php

class Empleados {
    private $datos;
    private $db;

    public function __construct()
    {
        require_once 'conexion.php';
        $this->db = db::conexiondb();
        $this->datos = [];
    }
    public function get_empleados (){
        try {
            $sql = "SELECT nombre,codigo_trabajador FROM empleados ";
            $query = $this->db->prepare($sql);
            $query->execute();
            while ($resul = $query->fetch(PDO::FETCH_ASSOC)){
                $this->datos[] = $resul;
            }
        } catch (Exception $errgetDatos) {
            echo 'error ' . $errgetDatos->getMessage();
            die('en la linea ' . $errgetDatos->getLine());
        }
        return $this->datos;
    }
}