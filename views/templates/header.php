
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacowebdev - <?= $title ?></title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <img src="assets/img/logo.png" alt="">
</header>
    <nav class="flex">
        <div>
            <a href="?home">Home</a>
            <a href="?admin">Admin</a>
        </div>
        <div>
            <?php if( is_logged() ): ?>
                <p>
                    <?= htmlentities( $_SESSION['username'], ENT_QUOTES ) ?>
                    <a href="?action=logout">Déconnexion</a>
                </p>
            <?php else: ?>
                <a href="?login">Connexion</a>
            <?php endif; ?>
        </div>
    </nav>