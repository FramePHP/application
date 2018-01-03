<?php

// use FramePHP\App\Application;

/**
 ********************************************************
 * 
 ******************************************************** 
*/
$App = FramePHP\App\Application::Instance();

/**
 ********************************************************
 * Intercept the request from user
 ******************************************************** 
*/
$App->getRequest(function(){
	
});

/**
 ********************************************************
 * Collect registered routes first
 ******************************************************** 
*/
$App->getRouting(function(){

    if(($sql_routes = app_path('http/routes.sql'))) return $sql_routes;
    if(($yml_routes = app_path('http/routes.yml'))) return $yml_routes;
    if(($arr_routes = app_path('http/routes.php'))) return $arr_routes;
    
});

/**
 ********************************************************
 * 
 ******************************************************** 
*/
$App->setResponse(function(){

});

/**
 ********************************************************
 * 
 ******************************************************** 
*/
return $App;