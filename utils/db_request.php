<?php
include 'db_conf.php';


function db_request( $sql_request, $values=null ): array
{
    try
    {
        $pdo = new PDO(DB_DSN, DB_LOGIN, DB_PASS, DB_OPTIONS);
        $result = $pdo->prepare( $sql_request );
        $result->execute( $values );
        return $result->fetchAll( PDO::FETCH_ASSOC );
    }
    catch ( PDOException $pe )
    {
        exit ( 'DB error : ' . $pe->getMessage() );
    }
}
