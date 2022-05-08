<?php

namespace Core;

use PDO;
use Exception;

class MySQL
{
    private static $conn = null;


    public function __construct(string $host, string $user, string $pass, string $dbname)
    {
        if (!static::$conn) {
            $dsn = 'mysql:host='.$host.';dbname='.$dbname;
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            try {
                static::$conn = new PDO($dsn,$user,$pass,$options);
            }
            catch (Exception $e) {

                die( '<p>MySQL Error: '.$e->getMessage().'</p>' );
            }
        }
    }

    public function query(string $sql_code)
    {
        return static::$conn->query($sql_code);
    }
}