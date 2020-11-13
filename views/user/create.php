<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>

<main role="main" class="container">
   
   <h1>Alta de usuario</h1>


<form class ="form" action="/user/store" method="post"></form>
    <div class = "form-group">
        <label for="name">Nombre</label>
        <input class ="form-control" type="text" name="name">
    </div>

    <div class = "form-group">
        <label for="surname">Apellidos</label>
        <input class ="form-control" type="text" name="surname">
    </div>

    <div class = "form-group">
        <label for="email">email</label>
        <input class ="form-control" type="text" name="email">
    </div>

    <div class = "form-group">
        <label for="birthdate">Fecha Nacimiento</label>
        <input class ="form-control" type="text" name="birthdate">
    </div>

    <div class = "form-group">
        <input class = "form-control" type="submit">
    </div>
