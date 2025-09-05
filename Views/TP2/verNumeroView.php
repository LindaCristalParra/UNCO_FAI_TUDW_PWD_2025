<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
    <!-- Ruta absoluta desde la raíz de tu proyecto -->
    <link rel="stylesheet" href="/PDW_TPS/Views/css/bootstrap.min.css">
</head>

<body class="p-4">

    <div class="container">
        <h2 class="mb-4">Ingrese un número</h2>

        
        <form method="post" action="../Accion/formAccion.php" class="needs-validation" novalidate>
            <input type="hidden" name="accion" value="verNumero2">
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
                <div class="invalid-feedback">
                    Por favor ingrese un número válido.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Verificar</button>
        </form>

        <!-- Mostrar resultado solo si hay -->
        <?php if (!empty($resultado)): ?>
            <div class="alert alert-info mt-3">
                <?php echo $resultado; ?>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Validación Bootstrap
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })();
    </script>
    <script src="/PDW_TPS/Views/js/bootstrap.bundle.min.js"></script>
</body>

</html>