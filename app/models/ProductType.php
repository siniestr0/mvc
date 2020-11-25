<?php
namespace App\Models;

use PDO;
use PDOException;

<<<<<<< HEAD
class ProductType {
    
    public static function all(){
        $db = ProductType::db();
        $statement = $db->query('SELECT * FROM product_types');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, ProductType::class);

        return $users;        
    }


    public static function find($id){
        $db = ProductType::db();

        $statement = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, ProductType::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    protected static function db(){
=======
class ProductType
{
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
>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
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
<<<<<<< HEAD

=======
>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
}
