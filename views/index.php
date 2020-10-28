<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <table border="solid">
    <?php
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>Usuario $user[0]</td>";
        echo "<td>$user[1]   </td>";
        echo "<td> <a href='index.php?method=show&id=$user[0]'> ver </a></td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>