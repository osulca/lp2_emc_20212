<?php
try {
    require_once "Conexion.php";
    $conn = new Conexion();
    $sql = "SELECT * FROM cromos";
    $resultados = $conn->conectar->query($sql);
    $conn->desconectar();
    foreach ($resultados as $i=>$cromo){
        $j[$i] = (int)$cromo["numero"];
    }
?>
    <a href="registro.php">registro</a>

    <table border="1" cellspacing="0" cellpadding="0">
        <?php
        echo "<tr>";
        for ($i = 1; $i <= 669; $i++) {
            echo "<td>";
            foreach ($j as $item){
                echo $item==$i?"<span style='background-color: yellow'>":"";
            }
            echo $i;
            echo "</td>";
            if ($i % 20 == 0) {
                echo "</tr>";
            }
        }
        echo "</tr>"
        ?>
    </table>
<?php
} catch (PDOException $e) {
    return $e->getMessage();
}


