
<main>
    <h1>Home</h1>
    <section class="flex">
        <?php foreach ( $posts as $post ): ?>
            <a href="?admin&id=<?= $post['post_id'] ?>">
                <article>
                    <h2><?= $post['post_title'] ?></h2>
                    <p><?= $post['cat_name'] ?></p>
                    <img src="assets/logos_dev/<?= $post['post_img'] ?>" alt="logo">
                </article>
            </a>
        <?php endforeach ?>
    </section>
</main>