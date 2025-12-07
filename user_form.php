<?php
// app/vistas/user_form.php
// espera $user array (puede venir vacío para create)
?>
<h2>Registrar Alumno</h2>

<form action="index.php?route=users&action=store" method="post" class="form-grid">
  <input type="text" name="nombre" placeholder="Nombre" required value="<?= htmlspecialchars($user['nombre'] ?? '') ?>">
  <input type="text" name="apellido" placeholder="Apellido" required value="<?= htmlspecialchars($user['apellido'] ?? '') ?>">
  <input type="email" name="email" placeholder="Correo electrónico" required value="<?= htmlspecialchars($user['email'] ?? '') ?>">
  <input type="text" name="carrera" placeholder="Carrera" value="<?= htmlspecialchars($user['carrera'] ?? '') ?>">
  <input type="text" name="semestre" placeholder="Semestre" value="<?= htmlspecialchars($user['semestre'] ?? '') ?>">
  <div style="grid-column:1/-1">
    <button type="submit">Registrar alumno</button>
  </div>
</form>

<p class="small">Los campos marcados con * son obligatorios.</p>