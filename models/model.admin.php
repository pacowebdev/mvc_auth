<?php

    $title = 'Admin';

    $users = db_request('SELECT * FROM users');
