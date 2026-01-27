<?php
class Conexion{
    private static $instance = null;
    private $conexion;

    private $host = 'bbdd';
    private $usuario = 'root';
    private $password = 'root';
    private $basedatos = 'dwes_01_gestion_eventos';

    private function __construct(){
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $this->conexion = new PDO(
        "mysql:host={$this->host}; dbname={$this->basedatos}",
        $this->usuario,
        $this->password,
        $opciones
    );
    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Conexion();
        }
        return self::$instance;
    }

    public function getConexion(){
        return $this->conexion;
    }
}
?>