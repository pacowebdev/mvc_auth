<?php

$title = 'Inscription';

// signin
if( isset($_POST['valid_signin']) )
{
    if( isset($_POST['form_username']) && !empty($_POST['form_username']) &&
        isset($_POST['form_password']) && !empty($_POST['form_password']))
    {
        $username = $_POST['form_username'];
        $password = password_hash($_POST['form_password'], PASSWORD_BCRYPT);

        $values_signin = [
            ':username' => $username,
            ':password' => $password
        ];
        db_request("
                    INSERT INTO users (user_username, user_password) 
                    VALUES (:username, :password)",
            $values_signin
        );
        $conf =  'Le compte ' . $_POST['form_username'] . ' a été créé :)';
    }
}
