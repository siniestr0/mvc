<?php
namespace App\Controllers;

class UserController  
{
    public function __construct()
    {
        // echo "en UserController<br>";
    }

    public function index()
    {
        
        //buscar la lista de productos
        $name = ProducttypeController::all(); //arriba pongo use ...
        // $users = \App\Models\User::all();
        // echo "<pre>";
        // print_r($users);
        //generar la vista
        include('../views/productype/index.php');
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
}