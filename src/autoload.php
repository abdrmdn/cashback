<?php

//function includeDir($path)
//{
//    $dir = new RecursiveDirectoryIterator($path);
//    $iterator = new RecursiveIteratorIterator($dir);
//    foreach ($iterator as $file) {
//        $fname = $file->getFilename();
//        if (preg_match('%\.php$%', $fname) && $file->getPathname() !== __FILE__) {
//            echo $file->getPathname()."\r\n";
////            include($file->getPathname());
//        }
//    }
//}


//main application
require_once 'source/commands/SBCommandsInterface.php';
require_once 'source/commands/SBCommands.php';


//commands
require_once 'source/commands/commandsStrategies/SBCommandInvalid.php';
require_once 'source/commands/commandsStrategies/SBCommandRedeem.php';
require_once 'source/commands/commandsStrategies/SBCommandSignup.php';
require_once 'source/commands/commandsStrategies/SBCommandSpend.php';


//
require_once 'source/commands/SBCommandsFactory.php';
require_once 'source/ShopbackController.php';
