<?php
namespace App\Controllers;

require_once('../app/models/User.php');
use \App\Models\User;

class UserController  
{
    public function __construct()
    {
        // echo "en UserController<br>";
    }

    public function index()
    {
        // echo "En método index<br>";

        //buscar la lista de usuarios
        $users = User::all(); //arriba pongo use ...
        // $users = \App\Models\User::all();
        // echo "<pre>";
        // print_r($users);
        //generar la vista
        include('../views/user/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
        $user = User::find($id);
        //generar la vista
        include('../views/user/show.php');
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }

    public function create(){

        include('../mvc/views/user/create.php');
    }

    public function store() {

        //crear objeto
        $user = new User;
        $user ->name = $_POST['name'];
        $user ->surname = $_POST['surname'];
        $user ->email = $_POST['email'];
        $user ->bithdate = $_POST['birthdate'];

        $user ->insert();

        //redirigir

        header('location: /user/index.php');
    }

    public function edit ($arguments){

        $id = $arguments[0];
        //buscar datos
        $user = User::find($id);

        include ('../views/user/edit.php');
        

    }
}
