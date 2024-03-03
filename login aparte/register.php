<?php
session_start();

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

// Verificar que los campos no estén vacíos
if (empty($usuario) || empty($correo) || empty($clave)) {
    $_SESSION['error'] = 'Todos los campos son obligatorios';
    header('Location: ../login.html');
    exit();
}

// Verificar que el correo electrónico sea válido
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = 'El correo electrónico no es válido';
    header('Location: ../login.html');
    exit();
}

// Verificar que el usuario no esté registrado
// Aquí deberías verificar en una base de datos si el usuario ya existe
// En este ejemplo, solo verificamos que el correo electrónico no esté en blanco
if (empty($correo)) {
    $_SESSION['error'] = 'El usuario ya está registrado';
    header('Location: ../login.html');
    exit();
}

// Todo está bien, redireccionar a index.php
header('Location: ../index.php');
exit();