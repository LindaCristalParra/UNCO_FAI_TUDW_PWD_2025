<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4" style="width: 25rem;">
      <h3 class="text-center mb-4">Iniciar Sesión</h3>
      <form action="../controladores/verificaPass.php" method="post" onsubmit="return validarFormulario()">
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

  <script>
    function validarFormulario() {
      let usuario = document.getElementById("usuario").value;
      let clave = document.getElementById("clave").value;

      // Longitud mínima
      if (clave.length < 8) {
        alert("La contraseña debe tener al menos 8 caracteres.");
        return false;
      }

      // Distinta al usuario
      if (clave === usuario) {
        alert("La contraseña no puede ser igual al usuario.");
        return false;
      }

      // Debe contener letras y números
      let regex = /^(?=.*[a-zA-Z])(?=.*[0-9])/;
      if (!regex.test(clave)) {
        alert("La contraseña debe contener letras y números.");
        return false;
      }

      return true;
    }
  </script>
</body>
</html>
