<?php
namespace source;


class ShopbackController{

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
        $this->generateCommandInstance();
    }
    /**
     * Will run the command provided regardless
     */
    public function run()
    {
//        $this->command->run();
    }

    private function generateCommandInstance() {
        $this->command = null;
    }
}
