<?php
//    printR( $post );
?>

<main>
    <?php foreach ($post as $post_detail): ?>
        <section class="detail">
            <h2><?= $post_detail['post_title'] ?></h2>
            <img src="assets/logos_dev/<?= $post_detail['post_img'] ?>" alt="logo">
            <p><?= $post_detail['post_content'] ?></p>
        </section>
    <?php endforeach; ?>
    <a href="?home">Retour</a>
</main>