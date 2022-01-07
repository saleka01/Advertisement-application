<?php
//embed php code
require_once ('route.php');

/**
 * It starts the website and load the using components.
 * @param string $class_name name of the component, what we want.
 */
function __autoload($class_name){
    if (file_exists('./Model/'.$class_name.'.php')){
        require_once ('./Model/'.$class_name.'.php');
    }
    else if (file_exists(('./Controller/'.$class_name.'.php'))){
        require_once ('./Controller/'.$class_name.'.php');
    }

}