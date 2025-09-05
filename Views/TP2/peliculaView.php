<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cinem@s - Carga de Películas</title>
    <link rel="stylesheet" href="/PDW_TPS/Views/css/bootstrap.min.css">
</head>

<body class="bg-light p-4">

    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-light text-primary small d-flex justify-content-between align-items-center">
                <span class="h4 text-info">Cinem@s</span>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="post" action="../../Views/Accion/formAccion.php" class="needs-validation" novalidate>
                    <input type="hidden" name="accion" value="cargarPelicula">

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Título</label>
                            <input type="text" name="titulo" class="form-control" required>
                            <div class="invalid-feedback">Ingrese el título.</div>
                        </div>
                        <div class="col">
                            <label class="form-label">Actores</label>
                            <input type="text" name="actores" class="form-control" required>
                            <div class="invalid-feedback">Ingrese los actores.</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Director</label>
                            <input type="text" name="director" class="form-control" required>
                            <div class="invalid-feedback">Ingrese el director.</div>
                        </div>
                        <div class="col">
                            <label class="form-label">Guion</label>
                            <input type="text" name="guion" class="form-control" required>
                            <div class="invalid-feedback">Ingrese el guion.</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Producción</label>
                            <input type="text" name="produccion" class="form-control" required>
                            <div class="invalid-feedback">Ingrese la producción.</div>
                        </div>
                        <div class="col">
                            <label class="form-label">Año</label>
                            <input type="number" name="año" class="form-control" maxlength="4" max="<?php echo date("Y"); ?>" required>
                            <div class="invalid-feedback">Ingrese un año válido.</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Nacionalidad</label>
                            <input type="text" name="nacionalidad" class="form-control" required>
                            <div class="invalid-feedback">Ingrese la nacionalidad.</div>
                        </div>
                        <div class="col">
                            <label class="form-label">Género</label>
                            <select name="genero" class="form-select" required>
                                <option value="">Seleccione...</option>
                                <option>Comedia</option>
                                <option>Drama</option>
                                <option>Terror</option>
                                <option>Románticas</option>
                                <option>Suspenso</option>
                                <option>Otras</option>
                            </select>
                            <div class="invalid-feedback">Seleccione un género.</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Duración (minutos)</label>
                            <input type="number" name="duracion" class="form-control" maxlength="3" required>
                            <div class="invalid-feedback">Ingrese duración válida.</div>
                        </div>
                        <div class="col">
                            <label class="form-label">Restricción de edad</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccionEdad" value="Todo público" required>
                                    <label class="form-check-label">Todo público</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccionEdad" value="Mayores 13" required>
                                    <label class="form-check-label">+13</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccionEdad" value="Mayores 18" required>
                                    <label class="form-check-label">+18</label>
                                </div>
                                <div class="invalid-feedback d-block">Seleccione restricción de edad.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">Ingrese la sinopsis.</div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-2">Enviar</button>
                        <button type="reset" class="btn btn-secondary">Borrar</button>
                    </div>
                </form>

                <?php if (!empty($peliculaIngresada)): ?>
                    <div class="alert alert-success mt-4">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <h4 class="text-info">La película introducida es: <?php echo $peliculaIngresada['titulo']; ?></h4>
                        <ul class="list-unstyled text-success">
                            <?php foreach ($peliculaIngresada as $key => $value): ?>
                                <li><strong><?php echo ucfirst($key); ?>:</strong> <?php echo $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <script src="/PDW_TPS/Views/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })();
    </script>

</body>

</html>