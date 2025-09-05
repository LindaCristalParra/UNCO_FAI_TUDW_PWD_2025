<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario Persona</title>
    <link rel="stylesheet" href="/PDW_TPS/Views/css/bootstrap.min.css">
</head>

<body class="p-4">
    <div class="container mt-4">
        <h2 class="mb-4">Ingrese sus datos</h2>

        <form method="get" action="/PDW_TPS/Views/Accion/formAccion.php" class="needs-validation" novalidate>
            <input type="hidden" name="accion" value="mostrarPersona2">

            <div class="row mb-3">
                <div class="col">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <div class="invalid-feedback">Por favor ingrese su nombre.</div>
                </div>
                <div class="col">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                    <div class="invalid-feedback">Por favor ingrese su apellido.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                    <div class="invalid-feedback">Ingrese su edad.</div>
                </div>
                <div class="col">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                    <div class="invalid-feedback">Ingrese su dirección.</div>
                </div>
            </div>

            <div class="mb-3">
                <p class="mb-1">Sexo:</p>
                <div class="invalid-feedback d-block">Seleccione su sexo</div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexoMasculino" value="Masculino" required>
                    <label class="form-check-label" for="sexoMasculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexoFemenino" value="Femenino" required>
                    <label class="form-check-label" for="sexoFemenino">Femenino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexoOtro" value="Otro" required>
                    <label class="form-check-label" for="sexoOtro">Otro</label>
                    
                </div>
            </div>

            <div class="mb-3">
                <p class="mb-1">Nivel de estudios:</p>
                <div class="invalid-feedback d-block">Seleccione su nivel de estudios</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nivelEstudio" id="estudio1" value="1" required>
                    <label class="form-check-label" for="estudio1">No tiene estudios</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nivelEstudio" id="estudio2" value="2" required>
                    <label class="form-check-label" for="estudio2">Estudios primarios</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nivelEstudio" id="estudio3" value="3" required>
                    <label class="form-check-label" for="estudio3">Estudios secundarios</label>
                    
                </div>
            </div>

            <div class="mb-3">
                <p class="mb-1">Deportes que practica:</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" id="futbol" value="Futbol">
                    <label class="form-check-label" for="futbol">Futbol</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" id="basket" value="Basket">
                    <label class="form-check-label" for="basket">Basket</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" id="tennis" value="Tennis">
                    <label class="form-check-label" for="tennis">Tennis</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" id="voley" value="Voley">
                    <label class="form-check-label" for="voley">Voley</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>

        <?php if (isset($mensaje) && $mensaje !== null): ?>
            <div class="alert alert-info mt-3"><?php echo $mensaje; ?></div>
        <?php endif; ?>
    </div>

    <script src="/PDW_TPS/Views/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>

</html>