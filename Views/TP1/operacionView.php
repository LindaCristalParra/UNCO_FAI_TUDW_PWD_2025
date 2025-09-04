<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operación Matemática</title>
    
</head>
<body>
    <h2>Ingrese los números y seleccione la operación</h2>
    <form method="get" action="../../Views/accion/formAccion.php">
        <input type="hidden" name="accion" value="operacionMatematica">
        <label>Número 1: <input type="text" name="num1" required></label><br>
        <label>Número 2: <input type="text" name="num2" required></label><br>

        <label>Operación:
            <select name="operador" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
        </label><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php if (isset($mensaje) && $mensaje !== null): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
</body>
</html>