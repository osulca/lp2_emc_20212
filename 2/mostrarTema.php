<?php
use app\controlador\PublicacionController;
use app\controlador\SuscripcionController;

require_once "config\autocarga.php";
$publicacionController = new PublicacionController();
$suscipcionController = new SuscripcionController();
?>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <select name="publicacion">
            <?php
            $publicaciones = $publicacionController::mostrarTodo();
            foreach ($publicaciones as $publicacion) {
                echo "<option value='".$publicacion["idpublicacion"]."'>".$publicacion["nombre"]."</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Guardar">
    </form>

<?php

if (!empty($_POST)) {
    $id_cliente = $_POST["cliente"];
    $id_publicacion = $_POST["publicacion"];
    echo $suscipcionController->guardar($id_cliente, $id_publicacion);
}
