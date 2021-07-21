
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