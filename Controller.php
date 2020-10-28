<?php
require_once('User.php');

class Controller  
{

    public function index()
    {
        $users = User::all();
        // echo json_encode($users);
        require('views/index.php');
    }

    
    public function show()
    {
        $id = $_GET['id'];
        $user = User::find($id);
        // echo json_encode($user);
        require('views/show.php');
    }
}