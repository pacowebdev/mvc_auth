<?php

    $title = 'Login';

    // login
    if( isset($_POST['valid_login']) )
    {
        if( isset($_POST['form_username']) && !empty($_POST['form_username']) &&
            isset($_POST['form_password']) && !empty($_POST['form_password']))
        {
            $username = $_POST['form_username'];
            $password = $_POST['form_password'];

            // récupère l'utilisateur dans la db qui correspond au form
            $values_login = [
                ':username' => $username
            ];
            $user = db_request('
                    SELECT * FROM users 
                    WHERE user_username = :username',
                $values_login
            );

            // si le form correspond avec la db,  on initialise une $_SESSION
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

?>


<main>
    <h1>Login</h1>
    <form method="POST">
        <p>
            <label for="form_username">Login : </label>
            <input type="email" id="form_username" name="form_username">
        </p>
        <p>
            <label for="form_password">Password : </label>
            <input type="password" id="form_password" name="form_password">
        </p>
        <input type="submit" name="valid_login" value="Connexion">
    </form>
    <p>Nouveau membre => <a href="?signin">Signin</a></p>
    <?php if( isset($error) ): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
</main>
