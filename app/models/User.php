<?php
namespace App\Models;

require_once '../core/Model.php';

use Core\Model;
use PDO;
use PDOException;


class User extends Model {
    public function __construct() {
        # code...
    }

    public static function all() {
        $db = User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;        
    }

    public static function find($id){
        $db = User::db();

        $statement = $db->prepare('SELECT * FROM users WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    protected static function db(){
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

    public  function insert($id){
        $db = User::db();

        //Le vamos a decir qué valores le queremos meter a la base de datos.
        $statement = $db->prepare('INSERT * INTO users (name, surname, email, birthdate)
         VALUES(:name, :surname, :email, :birthdate)');  // revisar sintaxis SQL INSERT VALUES
        $statement->execute(array(
                        ':name' => $this->name,
                        ':surname' => $this->surname,
                        ':email' => $this->email,
                        ':birthdate' => $this->birthdate));        
        
        return $statement ->execute();
    }
}
