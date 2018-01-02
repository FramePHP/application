<?php

/**
 * 
 * 
*/
define('APP_START_TIME', microtime(true));
/**
 *--------------------------------------------------------------------------------
 * 
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
$BP = require realpath(__DIR__.'/../blueprint.php'); 

/**
 *--------------------------------------------------------------------------------
 * 
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
$APP = require_once realpath($BP['sys'].'/igniter/init.php');

/**
 *--------------------------------------------------------------------------------
 * 
 *================================================================================
 * The blueprint file here is required and it is used to determine how you have 
 * structured your application. All the folders and such are store in here. 
 * -------------------------------------------------------------------------------
*/
$APP->getResponse()->run( APP_START_TIME );