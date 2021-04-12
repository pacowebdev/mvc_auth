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

?>


<main>
    <h1>Inscription</h1>
    <form method="POST">
        <p>
            <label for="form_username">Login : </label>
            <input type="email" id="form_username" name="form_username">
        </p>
        <p>
            <label for="form_password">Mot de passe : </label>
            <input type="password" id="form_password" name="form_password">
        </p>
        <input type="submit" name="valid_signin" value="Inscription">
    </form>
    <?php if( isset($conf) ): ?>
        <p><?= htmlentities( $conf, ENT_QUOTES ) ?></p>
        <a href="?login">Login</a>
    <?php endif; ?>
</main>