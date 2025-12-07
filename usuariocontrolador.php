<?php
require_once "modelo/usuarioModelo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];

    // Validar nombre
    if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $_POST["nombre"])) {
        $errores[] = "Nombre inválido.";
    }

    if (!preg_match("/^\d{4,10}$/", $_POST["matricula"])) {
        $errores[] = "Matrícula inválida.";
    }

    if (!preg_match("/^[A-Z]{4}\d{6}[A-Z]{6}\d{2}$/", strtoupper($_POST["curp"]))) {
        $errores[] = "CURP inválido.";
    }

    if (!preg_match("/^[A-Za-z0-9_]{3,}$/", $_POST["usuario"])) {
        $errores[] = "Usuario inválido.";
    }

    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $_POST["contrasena"])) {
        $errores[] = "Contraseña inválida.";
    }

    if (empty($errores)) {
        UsuarioModelo::guardar($_POST);
        echo "<p>Usuario registrado correctamente.</p>";
        <a href="http://localhost/proyectoprogramacion/proyectoprogramacion/proyecto_web_final/index.php"
         style="color:var(--accent);font-weight:bold;text-decoration:none;">
         ← Volver a mi sitio principal
      </a>
    } else {
        echo "<p>Errores en el formulario:</p>";
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
