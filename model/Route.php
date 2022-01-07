<?php

class Route{

    public static $validRoutes = [];
    /*
    Saves the right routes of the app
    */
    public static function set($route, $function){

        self::$validRoutes[] = $route;

        if($_GET['url'] == $route){
            $function->__invoke();
        }

    }

}