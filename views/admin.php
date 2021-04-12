<?php

    $users = db_request('SELECT * FROM users');

?>



<main>
    <h1>Admin</h1>
    <?php if( is_admin() ): ?>
        <article>
            <h2>Utilisateurs</h2>
                <ul>
                    <?php foreach( $users as $user ): ?>
                        <li><?= $user['user_username'] ?></li>
                    <?php endforeach; ?>
                </ul>
        </article>
    <?php else: ?>
        <p>Accès restreint aux administrateurs</p>
    <?php endif; ?>
</main>