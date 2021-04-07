<?php
    $title = 'Home';

    $posts = db_request('SELECT * FROM posts');