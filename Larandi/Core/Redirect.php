<?php 

/**
* Redirect helper class
*/
class Redirect {
    
    public static function to($route=BASE_URL)
    {
        header("Location: $route");
        exit();
    }
}