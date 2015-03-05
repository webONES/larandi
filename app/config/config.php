<?php 
define("ENVIROMENT", "development");
define("DEFAULT_CONTROLLER", "users");
define('DEFAULT_METHOD', 'index');
define('BASE_URL', 'http://localhost:8000/');
define('ASSETS_PATH', APP_PATH."assets/");



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

