<?php 
$titulo = "Subir Archivo"; 
include __DIR__ . '/../Estruct/header.php'; 
?>

    <div class="container mt-4">
        <h2>Subir archivo (.doc o .pdf, máximo 2MB)</h2>

        <form method="post" action="../../Views/accion/formAccion.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <input type="hidden" name="accion" value="subirArchivo">

            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccione el archivo:</label>
                <input class="form-control" type="file" name="archivo" id="archivo" required>
                <div class="invalid-feedback">Debe seleccionar un archivo.</div>
            </div>

            <button type="submit" class="btn btn-primary">Subir</button>
        </form>

        <?php if (isset($mensaje) && $mensaje !== null): ?>
            <div class="alert alert-info mt-3"><?php echo $mensaje; ?></div>
        <?php endif; ?>
    </div>

    <?php include __DIR__ . '/../Estruct/footer.php'; ?>