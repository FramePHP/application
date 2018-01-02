<?php

use FramePHP\App\Application;

//Error Reporting




//Loading Configs




//Process all these
$App = Application::Instance();

$App->getRequest()->setResponse();

return $App->run( microtime(true) );