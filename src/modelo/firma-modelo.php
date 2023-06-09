<?php

class firma
{

    private $db;
    private $datos;

    public function __construct()
    {
        require_once 'conexion.php';
        $this->db = DB::conexiondb();
    }

    public function get_firma($codigo)
    {
        try {
            $sql = "SELECT nombre,apellido,firma_digital FROM empleados where codigo_trabajador = :codigo";
            $query = $this->db->prepare($sql);
            $query->bindValue(':codigo', $codigo);
            $query->execute();
            while ($resul = $query->fetch(PDO::FETCH_ASSOC)){
                    $this->datos[] = $resul;
                }
        } catch (Exception $errconsulta) {
            echo 'error ' . $errconsulta->getMessage();
            die('en la linea ' . $errconsulta->getLine());
        }
        return $this->datos;;
    }
}
