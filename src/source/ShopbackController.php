<?php
namespace source;


class ShopbackController{

    private $args;

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

    }

    private function generateCommandInstance() {
        
    }
}
