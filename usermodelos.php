<?php
// app/Models/UserModel.php

class usermodelos {
    private $conn;
    public function __construct(mysqli $connection) {
        $this->conn = $connection;
    }

    // Obtener todos los alumnos
    public function getAll() {
        $sql = "SELECT id, nombre, apellido, email, carrera, semestre FROM alumnos ORDER BY id DESC";
        $result = $this->conn->query($sql);
        $rows = [];
        if ($result) {
            while ($r = $result->fetch_assoc()) {
                $rows[] = $r;
            }
            $result->free();
        }
        return $rows;
    }

    // Crear alumno
    public function create($nombre, $apellido, $email, $carrera, $semestre) {
        $sql = "INSERT INTO alumnos (nombre, apellido, email, carrera, semestre) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            return ['success' => false, 'error' => $this->conn->error];
        }
        $stmt->bind_param("sssss", $nombre, $apellido, $email, $carrera, $semestre);
        $ok = $stmt->execute();
        $error = $ok ? null : $stmt->error;
        $stmt->close();
        return ['success' => $ok, 'error' => $error];
    }

    // (Opcional) obtener por id, actualizar, eliminar — puedes agregarlos aquí cuando los necesites.
}