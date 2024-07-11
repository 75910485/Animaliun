<?php
// register.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Validación básica
    if (empty($nombre) || empty($edad) || empty($correo) || empty($contrasena)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Guardar datos en un archivo de texto
    $file = fopen('usuarios.txt', 'a');
    fwrite($file, "$nombre,$edad,$correo,$contrasena\n");
    fclose($file);

    echo "Registro exitoso. <a href='http://localhost/Animaliun-main/iniciar-sesion.html'>Iniciar Sesión</a>";
}
?>
