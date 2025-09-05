<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajos Prácticos - Programación Web Dinámica</title>
    <link rel="stylesheet" href="Views/css/bootstrap.min.css">

</head>

<?php 
include 'C:\xampp\htdocs\UNCO_FAI_TUDW_PWD_2025\Views\Estruct\header.php';

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
                    <a href="Views/TP1/verNumeroView.php">Ejercicio 1 - Ver número</a>
                </li>
                <li class="list-group-item">
                    <a href="Views/TP1/verHorasView.php">Ejercicio 2 - Ver horas</a>
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
                    <a href="Views/TP2/verNumeroView.php">Verificar Tipo de Número</a>
                </li>
                <li class="list-group-item">
                    <a href="Views/TP2/otraValidacion.php">Otra Validación</a>
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
                    <a href="Views/TP3/archivoController.php">Subida de un Archivo</a>
                </li>
                <li class="list-group-item">
                    <a href="Views/TP3/subirArchivoView.php">Subida de Múltiples Archivos</a>
                </li>
            </ul>
        </div>

    </div>

</body>
<?php
include 'C:\xampp\htdocs\UNCO_FAI_TUDW_PWD_2025\Views\Estruct\footer.php';
?>
</html>
