<?php

namespace app\modelo;
use config\Conexion;

require_once "config\Conexion.php";


class Cliente
{
    private $dni;
    private $nombre;
    private $direccion;

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function guardar(){
        try {
            $conn = new Conexion();
            $sql = "INSERT INTO cliente(dni, nombre, direccion) VALUES('$this->dni','$this->nombre', '$this->direccion')";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function mostrar(){
        try {
            $conn = new Conexion();
            $sql = "SELECT * FROM cliente";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }


}