<?php

use FramePHP\App\Application;
use FramePHP\Http\Request;

//Error Reporting




//Loading Configs




//Process all these
$App = new Application();

$App->collectRequest( Request::createFromData() );

$App->processRequest();

$App->returnResponse();

return $App;