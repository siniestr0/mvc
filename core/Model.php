<?php
<<<<<<< HEAD

=======
>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
namespace Core;

use PDO;
use PDOException;

<<<<<<< HEAD
=======

>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
class Model
{
   protected static function db()
    {
<<<<<<< HEAD
        $dsn = 'mysql:dbname=mvc;host=db';
=======
        $dsn = 'mysql:dbname=mvc;host=db;charset=utf8';
>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}