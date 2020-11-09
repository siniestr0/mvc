<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Detalle de usuario</h1>
    <div class="card">
        <div class="card-header">
            Usuario número <?= $user->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nombre: <?= $user->name ?></li>
            <li class="list-group-item">Apellidos: <?= $user->surname ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Fecha nacimiento: <?= $user->birthdate ?></li>
        </ul>
  </div>    
</main>

<?php include('../views/parts/footer.php'); ?>
