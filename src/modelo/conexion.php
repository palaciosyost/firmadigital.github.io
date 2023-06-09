<?php

class DB
{

    public static function conexiondb()
    {

        try {
            $conexion = new PDO('mysql:host=localhost; dbname=firmas_digitales', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec('set character set utf8');
        } catch (Exception $erconexion) {
            echo 'error ' . $erconexion->getMessage();
            die('en la linea ' . $erconexion->getLine());
        }

        return $conexion;
    }
}
