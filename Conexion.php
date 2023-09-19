<?php

class Conexion {
    // Declaración de los atributos
    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $dbname = "notas";
    private $usuario = "root";
    private $contrasena = "";

    public function __construct() {
        try {
            $db = new PDO( "{$this->driver}:host={$this->host};dbname={$this->
            dbname}", $this->usuario, $this->contrasena );
            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            #echo 'Conectado';
            return $db;
        } catch ( PDOException $e ) {
            echo 'Ha surgido un error al tratar de concectarse a la base de datos. Detalle: ' . $e->getMessage();
        }
    }
}