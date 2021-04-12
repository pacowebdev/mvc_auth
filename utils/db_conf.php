<?php

/**
 * infos db à rentrer
 */


const DB_HOST   = "localhost";
const DB_NAME   = "mvc_auth";
const DB_LOGIN  = "root";
const DB_PASS   = "root";


/**
 * Options
 */
const DB_DRIVER     = 'mysql';
const DB_DSN        = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
const DB_OPTIONS    = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_FOUND_ROWS   => true
];