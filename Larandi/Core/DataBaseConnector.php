<?php 

/**
* Data Base Connector
* @author Arandi López <arandilopez.93@gmail.com>
*/

class DataBaseConnector {
    
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
        return $pdo;
    }

    private static makeURL($database){
    $driver   = $database['driver'];
    $host     = $database['host'];
    $name     = $database['name'];
    $charset  = $database['charset'];

    return "$driver:host=$host;dbname=$name;charset=$charset";
    }
}