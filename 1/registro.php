<a href="index.php">index</a>

<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="numero" placeholder="ingrese numero">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php

if(isset($_POST["submit"])){
    echo $numero = (int)$_POST["numero"];

    try {
        require_once "Conexion.php";
        $conn = new Conexion();
        $sql = "INSERT INTO cromos(numero) VALUES($numero)";
        $resultados = $conn->conectar->exec($sql);
        $conn->desconectar();
        header("location: index.php");

    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
