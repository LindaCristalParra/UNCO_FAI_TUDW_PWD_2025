<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajos Prácticos - Programación Web Dinámica</title>
    <link rel="stylesheet" href="Views/css/bootstrap.min.css">
</head>

<?php 
include __DIR__ . './../Views/Estruct/header.php'; 
?>

<body class="container mt-5">
    
    <h1 class="mb-4">Trabajos Prácticos</h1>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="Controllers/TP1/verNumeroController.php">Trabajo Práctico 1 - Formularios</a>
        </li>
        <li class="list-group-item">
            <a href="Controllers/TP2/verNumeroController.php">Trabajo Práctico 2 - Validaciones y Bootstrap</a>
        </li>
        <li class="list-group-item">
            <a href="Controllers/TP3/archivoController.php">Trabajo Práctico 3 - Subida de Archivos</a>
        </li>
    </ul>
    
</body>
<?php 
include __DIR__ . './../Views/Estruct/footer.php'; 
?>
</html>
