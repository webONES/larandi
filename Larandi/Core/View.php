<?php 

/**
* View helper
* @author Arandi López <arandilopez.93@gmail.com>
*/

class View {

    public static function make($view = false, $data = false)
    {
        $viewPath = str_replace(".", "/", $view);
        
        if(file_exists(APP."view/$viewPath.php")) {
            if(is_array($data)) {
                foreach ($data as $variable => $value) {
                    $$variable = $value;
                }
            }
            $view = APP."view/$viewPath.php";
            include APP."view/includes/content.php";
        } else {
            throw new PVC\Exceptions\ViewNotFoundException("View not found: $view => $viewPath");
            
        }
    }
}