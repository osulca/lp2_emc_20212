<?php

namespace app\controlador;

use app\modelo\Suscripcion;

class SuscripcionController
{
    public function guardar($id_cliente, $id_publicacion){
        $suscripcion = new Suscripcion();
        $suscripcion->setIdCliente($id_cliente);
        $suscripcion->setIdPublicacion($id_publicacion);
        $resultado = $suscripcion->guardar();

        if($resultado!=1){
            return "no se guardó";
        }else{
            return "se guardó";
        }
    }
}