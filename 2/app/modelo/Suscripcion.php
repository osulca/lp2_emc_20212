<?php

namespace app\modelo;

use config\Conexion;
require_once "config\Conexion.php";

class Suscripcion
{
    private $id_cliente;
    private $id_publicacion;

    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function getIdPublicacion()
    {
        return $this->id_publicacion;
    }

    public function setIdPublicacion($id_publicacion)
    {
        $this->id_publicacion = $id_publicacion;
    }

    public function guardar(){
        try {
            $conn = new Conexion();
            $sql = "INSERT INTO suscripcion(id_cliente, id_publicacion) VALUES($this->id_cliente, $this->id_publicacion)";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function mostrarSuscritosTotal(){
        try {
            $conn = new Conexion();
            $sql = "SELECT c.dni, c.nombre as cliente, c.direccion, p.nombre as publicacion, p.tema, p.descripcion, n.fecha, n.resumen	 FROM suscripcion as s
                    JOIN cliente as c
                    ON s.id_cliente = c.idcliente
                    JOIN publicacion as p
                    ON s.id_publicacion = p.idpublicacion
                    JOIN numero as n
                    ON p.idpublicacion = n.id_publicacion";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}