<?php

use source\ShopbackController as ShopbackApplication;

require_once 'autoload.php';

try {
    //load Args
    $applicationArguments = array_slice($argv, 1, count($argv));
    if (count($applicationArguments) < 1) {
        throwError('No option was chosen');
    }

    //bootstrap application
    $shopbackCommand = new ShopbackApplication($applicationArguments);
    $shopbackCommand->run();
} catch (\Exception $e) {
    die($e->getMessage());
    exit;
}
