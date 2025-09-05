<?php 
$titulo = "Resultado de Login"; 
include __DIR__ . '/../Estruct//header.php'; 
?>
<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow-lg p-4 text-center" style="width: 25rem;">
    <h4 class="text-<?php echo $tipo; ?>">
      <?php echo htmlspecialchars($mensaje); ?>
    </h4>
    <a href="login.php" class="btn btn-secondary mt-3">Volver</a>
  </div>
</div>
<?php include __DIR__ . '/../Estruct/footer.php'; ?>
