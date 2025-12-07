<?php
require_once "config/conexion.php";

class UsuarioModelo {
    public static function guardar($datos) {
        global $pdo;
        $sql = "INSERT INTO usuarios (nombre_completo, matricula, curp, usuario, contrasena)
                VALUES (:nombre, :matricula, :curp, :usuario, :contrasena)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nombre" => $datos["nombre"],
            ":matricula" => $datos["matricula"],
            ":curp" => $datos["curp"],
            ":usuario" => $datos["usuario"],
            ":contrasena" => password_hash($datos["contrasena"], PASSWORD_DEFAULT)
        ]);
    }
}
?>
