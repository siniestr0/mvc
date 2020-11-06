<?php
namespace App\Controllers;

class HomeController
{
    public function __construct()
    {
        // echo "HomeController<br>";
    }
    public function index()
    {
        // echo "home->index";
        include('../views/home.php');
    }
}
