<?php
namespace source;

use source\commands\SBCommandsFactory;

class ShopbackController
{

    private $args;
    private $command;

    /**
     * ShopbackController constructor.
     *
     * @param $args
     */
    public function __construct($args)
    {
        $this->args = $args;
        $params = array_slice($args, 1, count($args));
        if(count($params) < 1){
            throwError('Not enought arguments passed');
        }
        $this->generateCommandInstance($params);
    }

    /**
     * Will run the command provided regardless
     */
    public function run()
    {
        $this->command->exec();
    }

    /**
     * @param $params
     */
    private function generateCommandInstance($params)
    {
        $this->command = SBCommandsFactory::Create(isset($this->args[0]) ? $this->args[0] : null, $params);
    }
}
