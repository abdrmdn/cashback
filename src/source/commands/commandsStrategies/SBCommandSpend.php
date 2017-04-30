<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;

class SBCommandSpend extends SBCommands implements SBCommandsInterface{


    public function exec()
    {
        $this->output('this is SpendCommand');
    }
}
