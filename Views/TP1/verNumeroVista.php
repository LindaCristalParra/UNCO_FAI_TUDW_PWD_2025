<!DOCTYPE html>
<html>
<head>
    <title>Verificar Número</title>
</head>
<body>

    <form method="post" action="../../Views/Accion/formAccion.php">
        <input type="hidden" name="accion" value="verNumero">

        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>

        <button type="submit">Verificar</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <p><?php echo $resultado; ?></p>
        <a href="../../Controllers/TP1/verNumeroController.php">Volver</a>
    <?php endif; ?>
</body>
</html>


