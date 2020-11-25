<?php
namespace App\Models;

use PDO;
use PDOException;

class ProductType{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db = ProductType::db();
        $statement = $db->query('SELECT * FROM producttypes');
        $producttypes = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $producttypes;        
    }

    public static function find($id)
    {
        $db = User::db();

        $statement = $db->prepare('SELECT * FROM producttypes WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $producttype = $statement->fetch(PDO::FETCH_CLASS);
        return $producttype;
    }

    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
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
