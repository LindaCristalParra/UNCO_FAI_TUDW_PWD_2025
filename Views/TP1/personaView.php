<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Persona Deportes</title>
    <link rel="stylesheet" href="../../Views/CSS/stylePersona.css">
</head>
<body>
    <h2>Ingrese sus datos</h2>
    <form method="get" action="/PDW_TPS/Controllers/TP1/personaController.php">
        <input type="hidden" name="accion" value="mostrarPersona">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Apellido: <input type="text" name="apellido" required></label><br>
        <label>Edad: <input type="number" name="edad" required></label><br>
        <label>Dirección: <input type="text" name="direccion" required></label><br>

        <p>Sexo:</p>
        <label><input type="radio" name="sexo" value="Masculino" required> Masculino</label><br>
        <label><input type="radio" name="sexo" value="Femenino" required> Femenino</label><br>
        <label><input type="radio" name="sexo" value="Otro" required> Otro</label><br>

        <p>Nivel de estudios:</p>
        <label><input type="radio" name="nivelEstudio" value="1" required> No tiene estudios</label><br>
        <label><input type="radio" name="nivelEstudio" value="2" required> Estudios primarios</label><br>
        <label><input type="radio" name="nivelEstudio" value="3" required> Estudios secundarios</label><br>

        <p>Deportes que practicas:</p>
        <label><input type="checkbox" name="deportes[]" value="Futbol"> Futbol</label><br>
        <label><input type="checkbox" name="deportes[]" value="Basket"> Basket</label><br>
        <label><input type="checkbox" name="deportes[]" value="Tennis"> Tennis</label><br>
        <label><input type="checkbox" name="deportes[]" value="Voley"> Voley</label><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php if (isset($mensaje) && $mensaje !== null): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
</body>
</html>