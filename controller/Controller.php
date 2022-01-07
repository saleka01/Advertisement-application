<?php

class Controller extends Database
{
	/*
	This calls the right view from a website.
	*/
    public static function CreateView($viewName){
        require_once ("./View/$viewName.php");
    }
}