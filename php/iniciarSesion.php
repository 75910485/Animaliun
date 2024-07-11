<?php
// iniciarSesion.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Validación básica
    if (empty($correo) || empty($contrasena)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Verificar los datos del usuario
    $file = fopen('usuarios.txt', 'r');
    $login_exitoso = false;
    while ($line = fgets($file)) {
        list($nombre, $edad, $correo_guardado, $contrasena_guardada) = explode(',', trim($line));
        if ($correo === $correo_guardado && $contrasena === $contrasena_guardada) {
            $login_exitoso = true;
            break;
        }
    }
    fclose($file);

    if ($login_exitoso) {
        echo "Inicio de sesión exitoso. <a href='http://localhost/Animaliun-main/index.html'>Ir al inicio</a>";
    } else {
        echo "Correo o contraseña incorrectos.";
    }
}
?>
