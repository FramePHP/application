<?php

use FramePHP\App\Application;

//Error Reporting




//Loading Configs




//Process all these
$App = new Application();

$App->collectRequest();

$App->processRequest();

$App->returnResponse();

return $App;