<?php
/**
 * It's a PHP framework, so why not use php arrays to set this blueprint?
 * Yeah, you can use yml, json, etc., but int the end we'll return an array;
 */

return [
	
	'paths' =>[
		// Base files
		'data'   => $data   = realpath(__DIR__.'/data'),
		'app'    => $app    = realpath(__DIR__.'/app'),
		'sys'    => $sys    = realpath(__DIR__.'/sys'),
		'vendor' => $vendor = realpath(__DIR__.'/vendor'),
     
	    // Application Initiator
		'initiator' => $init = realpath($sys.'/boot/init.php'),
		// Class autoloader
		'autoloader' => $loader = realpath($vendor.'/autoload.php'),
	],
];
