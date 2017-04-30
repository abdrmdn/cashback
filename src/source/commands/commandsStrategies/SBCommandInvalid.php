<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;

class SBCommandInvalid extends SBCommands implements SBCommandsInterface{


    public function exec()
    {
        $this->output('this command is not valid');
    }
}
