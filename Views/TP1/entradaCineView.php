<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Entrada - Cinem@s</title>

</head>
<body>
    <h2>Calculadora de Precio de Entradas</h2>
    <form method="get" action="../../Views/Accion/formAccion.php">
        <input type="hidden" name="accion" value="entradaCine">
        <label>Edad: <input type="number" name="edad" required></label><br>
        <label><input type="checkbox" name="esEstudiante"> Soy estudiante</label><br><br>
        
        <button type="submit">Calcular</button>
        <button type="reset">Limpiar</button>
    </form>

    <?php if (isset($mensaje) && $mensaje !== null): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
</body>
</html>