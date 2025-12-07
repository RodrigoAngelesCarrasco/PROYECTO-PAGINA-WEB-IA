<?php
// app/vistas/header.php
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>IA para Todos - Panel</title>
  <style>
    /* Estilos básicos inline para que funcione sin assets externos */
    body{font-family:Arial,Helvetica,sans-serif;background:#f4f6fb;color:#222;margin:0;padding:0}
    header{background:#1e3c72;color:#fff;padding:12px 20px}
    .container{max-width:1100px;margin:20px auto;padding:0 16px}
    nav a{color:#fff;margin-right:12px;text-decoration:none;font-weight:700}
    table{width:100%;border-collapse:collapse;background:#fff;margin-top:16px;border-radius:8px;overflow:hidden}
    table th, table td{padding:10px 12px;border-bottom:1px solid #eee;text-align:left}
    table th{background:#2a5298;color:#fff}
    .btn{display:inline-block;padding:8px 12px;border-radius:8px;text-decoration:none;background:#ff9800;color:#fff}
    .small{font-size:0.9rem;color:#666}
    .status{margin-top:10px;padding:8px;border-radius:6px}
    .success{background:#e6ffed;color:#0a6b2c}
    .error{background:#ffecec;color:#9b1b1b}
    form .form-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:10px}
    input[type="text"], input[type="email"] , textarea{width:100%;padding:8px;border-radius:6px;border:1px solid #d6dbe8}
    button[type="submit"]{padding:10px 14px;border-radius:8px;border:none;background:#1e3c72;color:#fff;cursor:pointer}
  </style>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <a href="index.php?route=users">Alumnos</a>
        <a href="index.php?route=users&action=create">Registrar alumno</a>
        <a href="http://localhost/proyectoprogramacion/proyectoprogramacion/proyecto_web_final/index.php">Sitio público</a>
      </nav>
    </div>
  </header>
  <main class="container">