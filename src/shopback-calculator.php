<?php

use source\ShopbackController as ShopbackApplication;

require_once 'source/ShopbackController.php';

//load Args
$args = [];

//bootstrap application
$shopbackCommand = new ShopbackApplication($args);
$shopbackCommand->run();
