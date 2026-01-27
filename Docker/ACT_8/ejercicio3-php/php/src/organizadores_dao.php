<?php
require_once 'Conexion.php';
require_once 'Organizador.class.php';

class organizadores_dao{
    public static function obtenerOrganizadores(){
        $conexion = Conexion::getInstance()->getConexion();
        $datos =$conexion->query("SELECT * FROM organizadores");
        $organizadores = [];
        while($registro = $datos->fetch(PDO::FETCH_OBJ)){
            $organizador = new Organizador(
                $registro->id,
                $registro->dni,
                $registro->nombre,
                $registro->contacto
            );
            $organizadores[] = $organizador;
        }
        return $organizadores;
    }
}
?>