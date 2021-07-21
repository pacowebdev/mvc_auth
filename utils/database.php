<?php

class Database
{
    protected static string $DB_HOST   = "localhost";
    protected static string $DB_NAME   = "mvc_auth";
    protected static string $DB_LOGIN  = "root";
    protected static string $DB_PASS   = "root";

    private static array $DB_OPTIONS = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_FOUND_ROWS   => true
    ];
    private static $CONT = null;

    public function __construct()
    {
        die( 'Init function is not allowed' );
    }

    public static function connect(): ?PDO
    {
        if( self::$CONT == null )
    {
        try
        {
            self::$CONT = new PDO(
            'mysql:host=' . self::$DB_HOST . ';dbname=' . self::$DB_NAME,
            self::$DB_LOGIN,
            self::$DB_PASS,
            self::$DB_OPTIONS
            );
        }
        catch ( PDOException $e )
        {
            die( $e->getMessage() );
        }
    }
    return self::$CONT;
    }

    public static function disconnect()
    {
        self::$CONT = null;
    }
}
