<?php

namespace app\controlador;

use app\modelo\Cliente;
require_once "config\autocarga.php";

class ClienteController
{
    public function guardar($dni, $nombre, $direccion){
        $cliente = new Cliente();
        $cliente->setDni($dni);
        $cliente->setNombre($nombre);
        $cliente->setDireccion($direccion);
        $resultado = $cliente->guardar();

        if($resultado!=1){
            return "no se guardó";
        }else{
            return "se guardó";
        }
    }

    public static function mostrarTodo(): \PDOStatement{
        $cliente = new Cliente();
        $resultados = $cliente->mostrar();
        return $resultados;
    }
}