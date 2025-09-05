<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación con Bootstrap</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            max-width: 600px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <h2 class="mb-4">Formulario con Validación Bootstrap</h2>
    <form class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
            <div class="invalid-feedback">
                Por favor ingresa tu nombre.
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" required>
            <div class="invalid-feedback">
                Ingresa un email válido.
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

    <script>
    // Script oficial de validación Bootstrap
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>
</body>
</html>