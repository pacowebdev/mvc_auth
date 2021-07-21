
<main>
    <h1>Admin</h1>
    <section class="flex">
        <?php if( is_admin() ): ?>
            <form action="#" method="post">
                <h2>Créer</h2>
                <label>
                    <input type="text" name="title_create" placeholder="Titre">
                </label>
                <label>
                    <input type="text" name="img_create" placeholder="Url de l'image">
                </label>
                <label>
                    <input type="text" name="cat_id_create" placeholder="Id de la catégorie">
                </label>
                <p>
                    <input type="submit" name="create_submit">
                </p>
            </form>
            <form action="#" method="post">
                <h2>Modifier</h2>
                <label>
                    <input type="text" name="id_update" placeholder="<?= $post_id ?>">
                </label>
                <label>
                    <input type="text" name="title_update" placeholder="Titre">
                </label>
                <label>
                    <input type="text" name="img_update" placeholder="Url de l'image">
                </label>
                <label>
                    <input type="text" name="cat_id_update" placeholder="Id de la catégorie">
                </label>
                <p>
                    <input type="submit" name="update_submit">
                </p>
            </form>
            <form action="#" method="post">
                <h2>Supprimer</h2>
                <label>
                    <input type="text" name="id_delete" placeholder="<?= $post_id ?>">
                </label>
                <p>
                    <input type="submit" name="delete_submit">
                </p>
            </form>
        <?php else: ?>
            <p>Accès restreint aux administrateurs</p>
        <?php endif; ?>
    </section>
</main>
