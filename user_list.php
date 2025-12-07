<?php
// app/vistas/users_list.php
// espera $users (array) y opcional ?status en GET
$status = $_GET['status'] ?? null;
?>
<h2>Lista de Alumnos</h2>

<?php if ($status === 'success'): ?>
  <div class="status success">Alumno registrado correctamente.</div>
<?php elseif ($status === 'error'): ?>
  <div class="status error">Ocurrió un error al registrar el alumno.</div>
<?php elseif ($status === 'incomplete'): ?>
  <div class="status error">Por favor completa los campos obligatorios.</div>
<?php endif; ?>

<a class="btn" href="index.php?route=users&action=create">Registrar nuevo alumno</a>

<?php if (empty($users)): ?>
  <p class="small">No hay alumnos registrados aún.</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Carrera</th>
        <th>Semestre</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $u): ?>
        <tr>
          <td><?= htmlspecialchars($u['id']) ?></td>
          <td><?= htmlspecialchars($u['nombre']) ?></td>
          <td><?= htmlspecialchars($u['apellido']) ?></td>
          <td><?= htmlspecialchars($u['email']) ?></td>
          <td><?= htmlspecialchars($u['carrera']) ?></td>
          <td><?= htmlspecialchars($u['semestre']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>