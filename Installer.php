<?php


/**
* 
*/
class Installer
{
	
	public function postInstall()
	{
		dump('HI - post install here!');
	}

	public function postUpdate()
	{
		dump('HI - post update here!!');
	}
}