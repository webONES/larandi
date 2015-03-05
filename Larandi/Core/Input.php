<?php 

/**
* Input abstraction
* @author Arandi López <arandilopez.93@gmail.com>
*/

class Input {

    public static get($key = false)
    {
    return ($key) ? $_REQUEST[$key] : $_REQUEST;
    }
}

