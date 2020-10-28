<?php
//modelo: accede a los datos de la aplicación
//una bases de datos, ficheros, ...
//en este caso es un array estático.
class User
{
    const USERS = [
        array(1, 'Juan'),
        array(2, 'Ana'),
        array(3, 'Pepa'),
        array(4, 'Toni')
    ];

    public static function all()
    {
        return User::USERS;
    }
    public static function find($id)
    {
        foreach (User::USERS as $key => $user) {
            if ($user[0] == $id) {
                return $user;
            }
        }
        return null;
    }
}