<?php
namespace App\Controllers;

class UserController  
{
    public function __construct()
    {
        echo "en UserController<br>";
    }

    public function index()
    {
        echo "En método index<br>";
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
}
