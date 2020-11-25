 
<?php
namespace App\Controllers;

require_once('../app/models/Producttype.php');
use \App\Models\ProductType;

use App\Controllers\ProductController;

class ProducttypeController {

    public function __construct(){

        //lo creamos vacio sin datos el constructor.

    }

    public function index() {

        //buscar la lista de productos
        $products = ProductType::all(); //arriba pongo use ...
        // echo "<pre>";
        // print_r($products);
        //generar la vista
        include('../views/user/index.php');
    }
}