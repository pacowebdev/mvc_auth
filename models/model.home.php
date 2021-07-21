<?php
    $title = 'Home';

    $posts = db_request( 'SELECT * FROM posts INNER JOIN category on post_cat_id = cat_id' );
