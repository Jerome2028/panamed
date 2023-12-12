<?php $title = "Admin - Dashboard"; ?>

<?php 
  require_once 'component/header.php';
  require_once 'component/import.php';
  require_once 'controller/controller.session.php'; 
?>
<body>
    <h1 class="text-primary">Dashboard</h1>
    <p class="text-primary">Welcome</p>
    <a href ="<?= $BASE; ?>logout">logout</a>
</body>