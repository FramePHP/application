<?php

/**
 * 
 * 
*/
define('APP_START_TIME', microtime(true));

/**
 *--------------------------------------------------------------------------------
 *  AUTOLOAD CLASSES
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
require_once realpath(__DIR__.'/../vendor/autoload.php'); 

/**
 *--------------------------------------------------------------------------------
 *  SYSTEM BLUEPRINT
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
$BP = require realpath(__DIR__.'/../blueprint.php'); 

/**
 *--------------------------------------------------------------------------------
 *   REQUESTS & RESPONSE
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
$APP = require_once realpath($BP['ignite'].'/init.php');

/**
 *--------------------------------------------------------------------------------
 *   RUN APPLICATION
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
return $APP->run( APP_START_TIME );