
<main>
    <h1>Home</h1>
    <section class="flex">
        <?php foreach ( $posts as $post ): ?>
            <article>
                <img src="assets/logos_dev/<?= $post['post_img'] ?>" alt="">
                <h2><?= $post['post_title'] ?></h2>
                <p><?= $post['post_content'] ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>

