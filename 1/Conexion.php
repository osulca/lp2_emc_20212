<?php
class Conexion{
    private $dsn = "mysql:host=localhost;dbname=figuras";
    private $username = "root";
    private $password = "";
    public $conectar;

    public function __construct()
    {
        $this->conectar = new PDO($this->dsn, $this->username, $this->password);
    }

    public function desconectar(){
        $this->conectar = null;
    }
}