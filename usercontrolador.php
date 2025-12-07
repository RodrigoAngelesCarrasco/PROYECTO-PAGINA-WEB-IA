<?php
// app/Controllers/UserController.php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../modelos/usermodelos.php';

class usercontrolador {
    private $db;
    private $model;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
        $this->model = new usermodelos($this->db);
    }

    // Mostrar lista de alumnos
    public function index() {
        $users = $this->model->getAll();
        include __DIR__ . '/../vistas/header.php';
        include __DIR__ . '/../vistas/user_list.php';
        include __DIR__ . '/../vistas/footer.php';
    }

    // Mostrar formulario de nuevo usuario
    public function create() {
        // variables vacías para la vista (útil si reutilizas para editar)
        $user = ['id' => '', 'nombre' => '', 'apellido' => '', 'email' => '', 'carrera' => '', 'semestre' => ''];
        include __DIR__ . '/../vistas/header.php';
        include __DIR__ . '/../vistas/user_form.php';
        include __DIR__ . '/../vistas/footer.php';
    }

    // Procesar formulario POST para crear usuario
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?route=users');
            exit;
        }

        // Sanitizar/validar básico
        $nombre = trim(htmlspecialchars($_POST['nombre'] ?? ''));
        $apellido = trim(htmlspecialchars($_POST['apellido'] ?? ''));
        $email = trim(htmlspecialchars($_POST['email'] ?? ''));
        $carrera = trim(htmlspecialchars($_POST['carrera'] ?? ''));
        $semestre = trim(htmlspecialchars($_POST['semestre'] ?? ''));

        if ($nombre === '' || $apellido === '' || $email === '') {
            // Redirigir con parámetro de estado (puedes mejorar usando flash sessions)
            header('Location: index.php?route=users&status=incomplete');
            exit;
        }

        $res = $this->model->create($nombre, $apellido, $email, $carrera, $semestre);
        if ($res['success']) {
            header('Location: index.php?route=users&status=success');
            exit;
        } else {
            header('Location: index.php?route=users&status=error');
            exit;
        }
    }
}