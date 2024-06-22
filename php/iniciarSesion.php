<?php

include('conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header("Location: Index.php?error=El usuario es requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: Index.php?error=La clabe es requerida");
        exit();
    }
}

?>