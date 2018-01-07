<?php

/**
 * 
 * 
*/
define('APP_START_TIME', microtime(true));

/**
 *--------------------------------------------------------------------------------
 *  LOAD SYSTEM BLUEPRINT
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the settings and information are stored here. 
 * -------------------------------------------------------------------------------
*/
$_BP = require_once realpath(__DIR__.'/../blueprint.php'); 

/**
 *--------------------------------------------------------------------------------
 *  AUTOLOAD CLASSES & FILES
 *================================================================================
 * Autoloading classes is handled by composer for us. If you wish to change this
 * feel free to created your own autoloader class in the blueprint
 * -------------------------------------------------------------------------------
*/
require_once realpath($_BP['paths']['autoloader']);

/**
 *--------------------------------------------------------------------------------
 *   INITIATE & RUN APPLICATION
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
$APP = require realpath($_BP['paths']['initiator']);
/**
 ***********************************************************************
 * Set the application environment
 ***********************************************************************
 * First and foremost, we ned to establish the application's environment, 
 * in order to know how to return the response and how much resources we 
 * need to allocate for it...
*/
$APP->app_env = app('env') ?? 'DEV'; // DEV | PROD | TEST

/**
 ***********************************************************************
 * Set the application root path
 ***********************************************************************
 * Next and importantly, we need the application root path to know where
 * all our login and files are stored...
*/
$APP->app_root = app('root') ?? realpath(__DIR__.'/../../');

/**
 ***********************************************************************
 * Set the custom application properties
 ***********************************************************************
 * Since the application can be accessed through the app() function, feel
 * free to set up your own properties here, as long as they are not already
 * in the FramePHP list. It can be anything
*/
// $App->custom_var = function(){ return 'Hello World!'; };

/**
 *--------------------------------------------------------------------------------
 *   TERMINATE THE APPLICATION
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
return $APP->terminate( APP_START_TIME );