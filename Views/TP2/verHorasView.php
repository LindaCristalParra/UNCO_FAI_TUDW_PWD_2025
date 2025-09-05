<?php
$titulo = "Cálculo de Horas Semanales";
include __DIR__ . '/../Estruct/header.php';
?>
<div class="container mt-4">
    <h2>Ingrese las horas de cursada por día</h2>

    <form method="get" action="../../Views/Accion/formAccion.php" class="needs-validation" novalidate>
        <input type="hidden" name="accion" value="calcularHoras2">

        <div class="mb-3">
            <label for="lunes" class="form-label">Lunes</label>
            <input type="number" class="form-control" id="lunes" name="lunes" required>
            <div class="invalid-feedback">
                Ingresa las horas del lunes.
            </div>
        </div>

        <div class="mb-3">
            <label for="martes" class="form-label">Martes</label>
            <input type="number" class="form-control" id="martes" name="martes" required>
            <div class="invalid-feedback">
                Ingresa las horas del martes.
            </div>
        </div>

        <div class="mb-3">
            <label for="miercoles" class="form-label">Miércoles</label>
            <input type="number" class="form-control" id="miercoles" name="miercoles" required>
            <div class="invalid-feedback">
                Ingresa las horas del miércoles.
            </div>
        </div>

        <div class="mb-3">
            <label for="jueves" class="form-label">Jueves</label>
            <input type="number" class="form-control" id="jueves" name="jueves" required>
            <div class="invalid-feedback">
                Ingresa las horas del jueves.
            </div>
        </div>

        <div class="mb-3">
            <label for="viernes" class="form-label">Viernes</label>
            <input type="number" class="form-control" id="viernes" name="viernes" required>
            <div class="invalid-feedback">
                Ingresa las horas del viernes.
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Calcular total</button>
    </form>

    <?php if (!empty($totalHoras)): ?>
        <div class="alert alert-info mt-3">
            Total de horas por semana: <?php echo $totalHoras; ?>
        </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../Estruct/footer.php'; ?>