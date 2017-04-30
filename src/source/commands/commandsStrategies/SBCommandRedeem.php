<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;

class SBCommandRedeem extends SBCommands implements SBCommandsInterface{


    public function exec()
    {
        $this->output('this is RedeemCommand');
    }
}
