<?php 
$titulo = "Formulario de Operación Matemática"; 
include __DIR__ . '/../Estruct/header.php'; 
?>
    <div class="container mt-4">
        <h2 class="mb-4">Ingrese los números y seleccione la operación</h2>

        <form method="get" action="../../Views/accion/formAccion.php" class="needs-validation" novalidate>
            <input type="hidden" name="accion" value="operacionMatematica2">

            <div class="mb-3">
                <label for="num1" class="form-label">Número 1:</label>
                <input type="text" class="form-control" id="num1" name="num1" required>
                <div class="invalid-feedback">
                    Por favor ingrese un número válido.
                </div>
            </div>

            <div class="mb-3">
                <label for="num2" class="form-label">Número 2:</label>
                <input type="text" class="form-control" id="num2" name="num2" required>
                <div class="invalid-feedback">
                    Por favor ingrese un número válido.
                </div>
            </div>

            <div class="mb-3">
                <label for="operador" class="form-label">Operación:</label>
                <select class="form-select" id="operador" name="operador" required>
                    <option value="">Seleccione...</option>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
                <div class="invalid-feedback">
                    Seleccione una operación.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php if (isset($mensaje) && $mensaje !== null): ?>
            <div class="alert alert-info mt-3">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
    </div>

<?php include __DIR__ . '/../Estruct/footer.php'; ?>