<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Lista de usuarios  
      <a class="btn btn-primary float-right" href="/user/create">Nuevo</a>
  </h1>
  <table class="table table-striped">
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>F. Nacimiento</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) {?>
                <tr>
                <td><?= $user->name ?></td>
                <td><?= $user->surname ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->birthdate ?></td>
                <td><a class="btn btn-primary btn-sm" href="/user/show/<?= $user->id ?>">  Ver </a></td>
                <td><a class="btn btn-primary btn-sm" href="/user/edit/<?= $user->id ?>">  Editar </a></td>
                <td><a class="btn btn-primary btn-sm" href="/user/delete/<?= $user->id ?>">  Borrar </a></td>
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</main>

<?php include('../views/parts/footer.php'); ?>
<?php include('../views/parts/footer.php'); ?>
