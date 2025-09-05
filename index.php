<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Trabajos Prácticos - Programación Web Dinámica</title>
</head>

<?php
include 'C:\xampp\htdocs\UNCO_FAI_TUDW_PWD_2025\Views\Estruct\header.php';
?>

<body class="container mt-5">

    <h1 class="mb-4">Trabajos Prácticos</h1>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="Controllers/TP1/verNumeroController.php">Trabajo Práctico 1 - Formularios</a>
        </li>
        <li class="list-group-item">
            <h5>Trabajo Práctico 2 - Validaciones y Bootstrap</h5>
            <ul class="list-group mt-2">
                <li class="list-group-item">
                    <a href="Views/TP2/loginView.php">Login</a>
                </li>
                <li class="list-group-item">
                    <a href="Views/TP2/peliculaView.php">Cinem@s</a>
                </li>
                <li class="list-group-item">
                    <a href="Controllers/TP2/verNumeroController.php">Verificar Tipo de Número</a>
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <a href="Controllers/TP3/archivoController.php">Trabajo Práctico 3 - Subida de Archivos</a>
        </li>
    </ul>

</body>
<?php
include 'C:\xampp\htdocs\UNCO_FAI_TUDW_PWD_2025\Views\Estruct\footer.php';
?>

</html>