<?php 
$titulo = "Verificar Número"; 
include __DIR__ . '/../Estruct/header.php'; 
?>

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
<?php include __DIR__ . '/../Estruct/footer.php'; ?>