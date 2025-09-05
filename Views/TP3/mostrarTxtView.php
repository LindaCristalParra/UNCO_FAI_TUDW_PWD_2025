<?php 
$titulo = "Mostrar TXT"; 
include __DIR__ . '/../Estruct/header.php'; 
?>

<div class="container mt-4">
    <h2>Subir archivo .txt</h2>

    <form method="post" action="../../Views/accion/formAccion.php" enctype="multipart/form-data" class="needs-validation" novalidate>
        <input type="hidden" name="accion" value="mostrarTxt">

        <div class="mb-3">
            <label for="archivo" class="form-label">Seleccione el archivo TXT:</label>
            <input type="file" class="form-control" name="archivo" id="archivo" required>
            <div class="invalid-feedback">Debe seleccionar un archivo TXT.</div>
        </div>

        <button type="submit" class="btn btn-primary">Mostrar contenido</button>
    </form>

    <?php if (!empty($mensaje)): ?>
        <div class="alert alert-info mt-3"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <?php if (!empty($contenido)): ?>
        <div class="mt-3">
            <label class="form-label">Contenido del archivo:</label>
            <textarea class="form-control" rows="10" readonly><?php echo htmlspecialchars($contenido); ?></textarea>
        </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../Estruct/footer.php'; ?>