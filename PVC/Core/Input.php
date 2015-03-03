<?php 

/**
* Input interface
*/

class Input
{
    
    // public static all()
    // {
    // 	Debugger::dump($_REQUEST);
    // 	return $_REQUEST;
    // }

    public static get($key = false)
    {
    return ($key) ? $_REQUEST[$key] : $_REQUEST;
    }
}

