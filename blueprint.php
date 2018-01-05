<?php

return [

	'vendor' => $vendor = realpath(__DIR__.'/vendor'),
	'data'   => $data   = realpath(__DIR__.'/data'),
	'app'    => $app    = realpath(__DIR__.'/app'),
	'sys'    => $sys    = realpath(__DIR__.'/sys'),


	'ignite' => $ignite = realpath($sys.'/igniter'),
];
