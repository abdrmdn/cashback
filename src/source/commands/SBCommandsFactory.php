<?php
namespace source\commands;

use source\commands\commandsStrategies\SBCommandInvalid;
use source\commands\commandsStrategies\SBCommandRedeem;
use source\commands\commandsStrategies\SBCommandSignup;
use source\commands\commandsStrategies\SBCommandSpend;

class SBCommandsFactory
{
    /**
     * @param string $commandName
     * @param array $parameters
     *
     * @return SBCommandsInterface
     */
    public static function Create($commandName, $parameters)
    {
        $commands = [
            'spend' => SBCommandSpend::class,
            'redeem' => SBCommandRedeem::class,
            'signup' => SBCommandSignup::class,

        ];
        //Dependecny injection
        $logger = (
        new class
        {
            public function log($msg)
            {
                echo $msg;
            }
        }
        );

        if (!empty($commandName) && !isset($commands[$commandName])) {
            return new SBCommandInvalid($logger);
        } else {
            return new $commands[$commandName]($logger, $parameters);
        }

    }
}
