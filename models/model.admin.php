<?php

    $title = 'Admin';
    $post_id = $_GET['id'];

//---> CREATE
    if ( isset($_POST['create_submit']) ) {
        $title = $_POST['title_create'];
        $img = $_POST['img_create'];
        $cat_id = $_POST['cat_id_create'];

        $request_create = "
                INSERT INTO `posts` (
                    `post_id`, 
                    `post_title`, 
                    `post_img`, 
                    `post_cat_id`) 
                VALUES (
                    NULL, 
                    :title, 
                    :img, 
                    :cat_id)"
        ;

        $array_mark_create = array(
            ':title' => $title,
            ':img' => $img,
            ':cat_id' => $cat_id
        );

        db_request( $request_create, $array_mark_create );
    }
    //---> UPDATE
    elseif ( isset($_POST['update_submit']) ) {
        $id = $_POST['id_update'];
        $title = $_POST['title_update'];
        $img = $_POST['img_update'];
        $cat_id = $_POST['cat_id_update'];

        $request_update = "
            UPDATE `posts` 
            SET
                `post_title` = :title, 
                `post_img` = :img, 
                `post_cat_id` = :cat_id 
            WHERE `posts`.`post_id` = :post_id"
        ;

        $array_mark_update = array(
            ':post_id' => $id,
            ':title' => $title,
            ':img' => $img,
            ':cat_id' => $cat_id
        );

        db_request( $request_update, $array_mark_update );
    }
    //---> DELETE
    elseif ( isset($_POST['delete_submit']) ) {
        $id = $_POST['id_delete'];
        $array_mark_update = array(
            ':post_id' => $id
        );

        db_request( "
            DELETE FROM `posts` 
            WHERE `posts`.`post_id` = :post_id",
            $array_mark_update
        );
    }