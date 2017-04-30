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
     *
     * @return SBCommandsInterface
     */
    public static function Create($commandName)
    {
        $commands = [
            'spend' => SBCommandSpend::class,
            'redeem' => SBCommandRedeem::class,
            'signup' => SBCommandSignup::class,

        ];
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
            return new $commands[$commandName]($logger);
        }

    }
}
