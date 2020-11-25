<?php
namespace App\Models;

<<<<<<< HEAD
require_once '../core/Model.php';

use Core\Model;
=======
// require_once '../core/Model.php'; # preparo el acceso a otro fichero

>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
use PDO;
use Core\Model; # sigo preparando mediante use.

<<<<<<< HEAD

class User extends Model {
    public function __construct() {
=======
class User extends Model
{
    public function __construct()
    {
>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
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

<<<<<<< HEAD
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
=======
    public function insert()
    {
        $db = User::db();
        $statement = $db->prepare('INSERT INTO users(`name`, `surname`, `email`, `birthdate`) VALUES(:name, :surname, :email, :birthdate)');
        $data = [
            ':name' => $this->name,
            ':surname' => $this->surname,
            ':email' => $this->email,
            ':birthdate' => $this->birthdate
        ];
        return $statement->execute($data);
    }

    public function save()
    {
        $db = User::db();
        $statement = $db->prepare('UPDATE users SET `name`=:name, `surname`=:surname, `email`=:email, `birthdate`=:birthdate WHERE id=:id');
        $data = [
            ':id' => $this->id,
            ':name' => $this->name,
            ':surname' => $this->surname,
            ':email' => $this->email,
            ':birthdate' => $this->birthdate
        ];
        return $statement->execute($data);
    }
    
    public function delete()
    {
        $db = User::db();
        $statement = $db->prepare('DELETE FROM users WHERE id=:id');        
        return $statement->execute([':id' => $this->id]);        
    }

    public static function destroy($id)
    {
        $db = User::db();
        $statement = $db->prepare('DELETE FROM users WHERE id=:id');        
        return $statement->execute([':id' => $id]);        
    }

    public function setPassword($password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $db = User::db();
        $stmt = $db->prepare('UPDATE users SET password = :password WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $password;
    }
    public function passwordVerify($password)
    {
        return password_verify($password, $this->password);
>>>>>>> e1c1386f31a6a2890bf5a5a8433341eec90f3c70
    }

    public function insert(){
        $db = User::db();
        //creamos la consulta de SQL para insertar datos en la BBDD 
        $statement = $db->prepare('INSERT INTO users(name, surname, email, birthdate) VALUES(:name, :surname, :email, :birthdate)');

        // Esta parte es como el contructor, asignamos las variables que vamos a modificar
        $data = [
            ':name' => $this->name,
            ':surname' => $this->surname,
            ':email' => $this->email,
            ':birthdate' => $this->birthdate
        ];
        return $statement->execute($data);
    }

    // dudas sobre la diferencia entre DESTROY y DELETE la parte de SQL es la misma, pero no se executa igual.
    public function delete(){

            $db = User::db();
            $statement = $db-> prepare('DELETE FROM users WHERE id=:id');
            return $statement->execute([':id' => $this->id]);

        }

    public static function destroy($id){

            $db = User::db();
            $statement = $db-> prepare('DELETE FROM users WHERE id=:id');
            return $statement->execute([':id' => $id]);

        }

        // La función SAVE es para modificar la BBDD, de modo que en lugar de meter datos, lo que hacemos es un UPDATE desde la sintaxis de SQL
    public function save() {
            $db = User::db();
            $statement = $db->prepare('UPDATE users SET `name`=:name, `surname`=:surname, `email`=:email, `birthdate`=:birthdate WHERE id=:id');
            $data = [
                ':id' => $this->id,
                ':name' => $this->name,
                ':surname' => $this->surname,
                ':email' => $this->email,
                ':birthdate' => $this->birthdate
            ];
            return $statement->execute($data);
        }

}
