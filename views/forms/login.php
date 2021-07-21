
<main>
    <h1>Connexion</h1>
    <form method="POST">
        <p>
            <label for="form_username">Login : </label>
            <input type="email" id="form_username" name="form_username">
        </p>
        <p>
            <label for="form_password">Mot de passe : </label>
            <input type="password" id="form_password" name="form_password">
        </p>
        <input type="submit" name="valid_login" value="Connexion">
    </form>
    <p>Nouveau membre => <a href="?signin">Inscription</a></p>
    <?php if( isset($error) ): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
</main>
