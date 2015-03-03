<?php 

spl_autoload_extensions('.php');

spl_autoload_register(
    function ($className) {

        if (file_exists("app/controller/$className.php")) {
            include_once "app/controller/$className.php";
        }

        if (file_exists("app/model/$className.php")) {
            include_once "app/model/$className.php";
        }

        if (file_exists("Larandi/Core/$className.php")) {
            include_once "Larandi/Core/$className.php";
        }

        if (file_exists("tests/$className.php")) {
            include_once "tests/$className.php";
        }
    }
);

