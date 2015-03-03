<?php 

define("APP_PATH", dirname(__DIR__)."/");
define("APP_BASE", basename(APP_PATH));
define("ENVIROMENT", "development");
// define("ENVIROMENT", "production");
define("DEFAULT_CONTROLLER", "users");
define('DEFAULT_METHOD', 'index');
define('BASE_URL', 'http://localhost:8000/');



if(ENVIROMENT==="development") {
    session_save_path(APP_PATH."tmp");
}
session_start();

/**
 * Database config array
 * @var $database
 * @global array $database
 */
global $database;
$database = include 'database.php';

