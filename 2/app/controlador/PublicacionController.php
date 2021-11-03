<?php

namespace app\controlador;

use app\modelo\Publicacion;
require_once "config\autocarga.php";

class PublicacionController
{
    public static function mostrarTodo(): \PDOStatement{
        $publicacion = new Publicacion();
        $resultados = $publicacion->mostrar();
        return $resultados;
    }
}