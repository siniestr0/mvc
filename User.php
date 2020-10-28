<?php

// modelo para acceder a los datos de la aplicacion
// en este caso, es un array estatico.

class User
{
    const USERS = [
        array(1, 'Juan'),
        array(2, 'Ana'),
        array(3, 'Pepa'),
        array(4, 'Toni')
    ];

    //esto es para ver TODOS los usuarios
    public static function all()
    {
        return User::USERS;
    }

    //esto es para mostrar un usuario en concreto
    public function find($id){

        foreach (User::USERS as $key => $user){

            if ($user[0]== $id){
                return $user;
            }
        }
        return User::USERS[$id];
    }
}