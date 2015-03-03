<?php 

/**
* SQL Query Builder
*/

class QueryBuilder
{
    
    protected function __construct()
    {
        
    }

    private $query;

    private static function getInstance()
 {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
           }

        return $instance;
 }

    public static function select()
    {
        
    }
}