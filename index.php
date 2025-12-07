<?php
// public/index.php
// Front controller simple. Asegúrate que tu DocumentRoot apunte a /public
require_once __DIR__ . '/../app/controlador/usercontrolador.php';

// Determinar ruta
$route = $_GET['route'] ?? 'users';
$action = $_GET['action'] ?? 'index';

// En este proyecto simple solo tenemos "users" controller
switch ($route) {
    case 'users':
        $ctrl = new usercontrolador();
        if ($action === 'create') {
            $ctrl->create();
        } elseif ($action === 'store') {
            $ctrl->store();
        } else {
            $ctrl->index();
        }
        break;

    default:
        // Para rutas desconocidas puedes redirigir a users
        header('Location: index.php?route=users');
        break;
} 