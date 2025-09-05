<?php 
$titulo = "Calculadora de Precio de Entradas - Cinem@s"; 
include __DIR__ . '/header.php'; 
?>
    <div class="container mt-4">
        <h2 class="mb-4">Calculadora de Precio de Entradas</h2>

        <form method="get" action="../../Views/Accion/formAccion.php" class="needs-validation" novalidate>
            <input type="hidden" name="accion" value="entradaCine2">

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
                <div class="invalid-feedback">
                    Por favor ingrese su edad.
                </div>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="esEstudiante" name="esEstudiante">
                <label class="form-check-label" for="esEstudiante">Soy estudiante</label>
            </div>

            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="reset" class="btn btn-secondary">Limpiar</button>
        </form>

        <?php if (isset($mensaje) && $mensaje !== null): ?>
            <div class="alert alert-success mt-3">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="/PDW_TPS/Views/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
        })();
    </script>

<?php include __DIR__ . '/footer.php'; ?>