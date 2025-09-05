<?php 
$titulo = "Login"; 
include __DIR__ . '/../Estruct//header.php'; 
?>
<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow-lg p-4" style="width: 25rem;">
    <h3 class="text-center mb-4">Iniciar Sesión</h3>

    <form action="../../Views/Accion/formAccion.php" method="post" onsubmit="return validarFormulario()">
      <input type="hidden" name="accion" value="login">

      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
      </div>
      <div class="mb-3">
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="clave" name="clave" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
  </div>
</div>

<script src="../public/js/validaciones.js"></script>
<?php include __DIR__ . '/../Estruct/footer.php'; ?>