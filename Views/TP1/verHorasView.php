<!DOCTYPE html>
<html>
<head>
    <title>Horas Semanales</title>
</head>
<body>

    <form method="get" action="../../Views/Accion/formAccion.php">
        <input type="hidden" name="accion" value="calcularHoras">

        <label for="lunes">Lunes:</label>
        <input type="number" name="lunes" id="lunes" required><br>

        <label for="martes">Martes:</label>
        <input type="number" name="martes" id="martes" required><br>

        <label for="miercoles">Miércoles:</label>
        <input type="number" name="miercoles" id="miercoles" required><br>

        <label for="jueves">Jueves:</label>
        <input type="number" name="jueves" id="jueves" required><br>

        <label for="viernes">Viernes:</label>
        <input type="number" name="viernes" id="viernes" required><br>

        <button type="submit">Calcular total</button>
    </form>

    <?php if (!empty($totalHoras)): ?>
        <p>Total de horas por semana: <?php echo $totalHoras; ?></p>
    <?php endif; ?>

</body>
</html>
