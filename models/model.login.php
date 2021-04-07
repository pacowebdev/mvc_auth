<?php

    $title = 'Connexion';

    // login
    if( isset($_POST['valid_login']) )
    {
        if( isset($_POST['form_username']) && !empty($_POST['form_username']) &&
            isset($_POST['form_password']) && !empty($_POST['form_password']))
        {
            $username = $_POST['form_username'];
            $password = $_POST['form_password'];

            $values_login = [
                ':username' => $username
            ];
            $user = db_request('
                    SELECT * FROM users 
                    WHERE user_username = :username',
                $values_login
            );

            if( $user )
            {
                if( password_verify($password, $user[0]['user_password']) )
                {
                    $_SESSION['username'] = $user[0]['user_username'];
                    $_SESSION['admin'] = $user[0]['user_admin'];
                    header('location: ?home');
                }
                else
                {
                    $error =  'Identifiant ou mot de passe incorrect :(';
                }
            }
            $error =  'Identifiant ou mot de passe incorrect :(';
        }
    }