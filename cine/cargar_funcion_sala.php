<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_sala FROM sala");

while ($datos = $sql->fetch()) {
    echo "<option value='$datos[id_sala]'>$datos[id_sala]</option>";
}

?>