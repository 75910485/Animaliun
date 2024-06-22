<?php

$host = "localhost";
$User = "root";
$pass = "root";

$db = "iniciosesion";

$conexion = mysqli_connect($host, $User, $pass, $db);

if (!$con) {
    echo "Conexion Fallida";
}

?>