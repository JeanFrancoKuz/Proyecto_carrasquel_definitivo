<?php
session_start();

$correo = $_POST['correo'];
$clave = $_POST['clave'];

// Verificar que los campos no estén vacíos
if (empty($correo) || empty($clave)) {
    $_SESSION['error'] = 'Todos los campos son obligatorios';
    header('Location: ../login.html');
    exit();
}

// Verificar las credenciales del usuario
// Aquí deberías verificar en una base de datos si las credenciales son válidas
// En este ejemplo, solo verificamos que el correo electrónico y la contraseña no estén en blanco
if (empty($correo) || empty($clave)) {
    $_SESSION['error'] = 'Las credenciales son inválidas';
    header('Location: ../login.html');
    exit();
}

// Todo está bien, redireccionar a index.php
header('Location: ../index.php');
exit();