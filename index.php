<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajos Prácticos - Programación Web Dinámica</title>
    <link rel="stylesheet" href="Views/css/bootstrap.min.css">
    <script src="Views/js/bootstrap.bundle.min.js"></script>
</head>

<?php 
include "Views/Estruct/header.php";
?>

<body class="container mt-5">
    
    <h1 class="mb-4">Trabajos Prácticos</h1>

    <div class="list-group">

        <!-- TP1 -->
        <a class="list-group-item list-group-item-action" 
           data-bs-toggle="collapse" href="#tp1" role="button" 
           aria-expanded="false" aria-controls="tp1">
           Trabajo Práctico 1 - Formularios
        </a>
        <div class="collapse" id="tp1">
            <ul class="list-group ms-3">
                <li class="list-group-item">
                    <a href="Controllers/TP1/verNumeroController.php">Ejercicio 1 - Ver número</a>
                </li>
                <li class="list-group-item">
                    <a href="Controllers/TP1/otroController.php">Ejercicio 2 - Otro</a>
                </li>
            </ul>
        </div>

        <!-- TP2 -->
        <a class="list-group-item list-group-item-action" 
           data-bs-toggle="collapse" href="#tp2" role="button" 
           aria-expanded="false" aria-controls="tp2">
           Trabajo Práctico 2 - Validaciones y Bootstrap
        </a>
        <div class="collapse" id="tp2">
            <ul class="list-group ms-3">
                <li class="list-group-item">
                    <a href="Controllers/TP2/verNumeroController.php">Verificar Tipo de Número</a>
                </li>
                <li class="list-group-item">
                    <a href="Controllers/TP2/otraValidacion.php">Otra Validación</a>
                </li>
            </ul>
        </div>

        <!-- TP3 -->
        <a class="list-group-item list-group-item-action" 
           data-bs-toggle="collapse" href="#tp3" role="button" 
           aria-expanded="false" aria-controls="tp3">
           Trabajo Práctico 3 - Subida de Archivos
        </a>
        <div class="collapse" id="tp3">
            <ul class="list-group ms-3">
                <li class="list-group-item">
                    <a href="Controllers/TP3/archivoController.php">Subida de un Archivo</a>
                </li>
                <li class="list-group-item">
                    <a href="Controllers/TP3/multiArchivoController.php">Subida de Múltiples Archivos</a>
                </li>
            </ul>
        </div>

    </div>

</body>
</html>
