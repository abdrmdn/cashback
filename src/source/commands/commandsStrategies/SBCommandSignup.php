<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;

class SBCommandSignup extends SBCommands implements SBCommandsInterface{


    public function exec()
    {
        $this->output('this is SignupCommand');
    }
}
