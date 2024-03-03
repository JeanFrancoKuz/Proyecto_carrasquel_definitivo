<?php

// Lectura del archivo de usuarios
$archivo = 'usuarios.txt';
$usuarios = [];

// Leer el archivo línea por línea
if (($handle = fopen($archivo, "r")) !== FALSE) {
    while (($data = fgets($handle)) !== FALSE) {
        // Eliminar el salto de línea
        $data = rtrim($data);

        // Dividir el usuario y la contraseña
        list($usuario, $password) = explode(':', $data);

        // Agregar al arreglo de usuarios
        $usuarios[] = [
            'usuario' => $usuario,
            'password' => $password
        ];
    }

    fclose($handle);
}

// Obtener los datos del formulario
$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

// Validar las credenciales
$autenticado = false;
foreach ($usuarios as $user) {
    if ($user['usuario']['password'] === $password) {
        $autenticado = true;
        break;
    }
}

// Redirigir al usuario
if ($autenticado) {
    header('Location: index.php');
} else {
    header('Location: login.php?error=1');
}

?>