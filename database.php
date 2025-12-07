<?php
// config/database.php
class Database {
    private static $instance = null;
    private $conn;

    private function __construct() {
        // Cambia estos valores por los de tu entorno
        $host = '127.0.0.1';
        $user = 'root';
        $pass = '';
        $name = 'mvc_simple_db';

        $this->conn = new mysqli($host, $user, $pass, $name);
        if ($this->conn->connect_errno) {
            die("Error de conexión a la base de datos: " . $this->conn->connect_error);
        }
        $this->conn->set_charset('utf8mb4');
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}