<?php

/**
* URL class for build urls
*/
class URL
{
    
    /**
     * Create an URL based on BASE_URL global
     * @param  string $route route in format as: controller.method[.params]
     * @return string        router in format as: http://example.com/controller/method[/params]
     */
    public static function to($route=false)
    {
        if ($route) {
            $url_path = str_replace(".", "/", $route);
            return BASE_URL.$url_path;
        }
        else
        {
            return BASE_URL;
        }
    }
}