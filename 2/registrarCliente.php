<?php

use app\controlador\ClienteController;

require_once "app\controlador\ClienteController.php";
?>

    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="dni" placeholder="ingrese dni">
        <input type="text" name="nombre" placeholder="ingrese nombre">
        <input type="text" name="direccion" placeholder="ingrese direccion">
        <input type="submit" name="submit" value="Guardar">
    </form>
<?php
if (!empty($_POST)) {
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $clienteController = new ClienteController();
    echo $clienteController->guardar($dni, $nombre, $direccion);
}
