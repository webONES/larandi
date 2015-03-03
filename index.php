<?php 

require 'bootstrap/start.php';
require 'app/config/config.php';
require 'app/config/autoload.php';

$app = new App();

$app->run();

?>