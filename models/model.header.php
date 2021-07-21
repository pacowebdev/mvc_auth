<?php
init_php_session();

if( isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'logout' )
{
    clean_php_session();
    header('location: ?home');
}