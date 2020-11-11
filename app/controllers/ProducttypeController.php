<?php
namespace App\Controllers;

require_once('../app/models/ProductType.php');

use \App\Models\ProductType;

class ProducttypeController  {
    public function __construct() {
        // echo "en UserController<br>";
    }

    public function index(){
        // echo "En método index<br>";

        //buscar la lista de usuarios
        $producttypes = ProductType::all(); //arriba pongo use ...
        // $users = \App\Models\User::all();
        // echo "<pre>";
        // print_r($users);
        //generar la vista
        include('../views/user/index.php');
    }
    
    public function show($arguments){
        $id = $arguments[0];
        echo "Mostrar el producto $id";        
        $producttypes = ProductType::find($id);
        //generar la vista
        include('../views/user/show.php');
    }
    
    public function delete($arguments){
        $id = $arguments[0];
        echo "Borrar el producto $id";        
    }
}
?>