<?php

use source\ShopbackController as ShopbackApplication;

require_once 'autoload.php';

//load Args
$applicationArguments = array_slice($argv,1, count($argv));

//bootstrap application
$shopbackCommand = new ShopbackApplication($applicationArguments);
$shopbackCommand->run();
