<?php 

/**
* Data Base Connector
*/

class DataBaseConnector
{
    
    global $database;

    public static function getConnection()
    {
        $default        = $database['default'];
        $connectionData = $database['connections'][$default];
        $user           = $connectionData['user'];
        $password       = $connectionData['password'];
        
        $url = self::makeURL($connectionData);

        $pdo = new PDO($url, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private static makeURL($database){
    $driver   = $database['driver'];
    $host     = $database['host'];
    $name     = $database['name'];
    $charset  = $database['charset'];

    return "$driver:host=$host;dbname=$name;charset=$charset";
    }
}