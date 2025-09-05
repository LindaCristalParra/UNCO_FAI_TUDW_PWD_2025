<?php
require_once("../Modelo/usuarios.php");

$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada = $_POST['clave'] ?? '';

$encontrado = false;

foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
        $encontrado = true;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4 text-center" style="width: 25rem;">
      <?php if ($encontrado): ?>
        <h4 class="text-success">¡Bienvenido, <?= htmlspecialchars($usuarioIngresado) ?>!</h4>
      <?php else: ?>
        <h4 class="text-danger">Usuario o contraseña incorrectos</h4>
      <?php endif; ?>
      <a href="../Vistas/login.php" class="btn btn-secondary mt-3">Volver</a>
    </div>
  </div>
</body>
</html>
