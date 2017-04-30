<?php

namespace source\commands;


class SBCommands
{
    private $logger;

    /**
     * SBCommands constructor.
     *
     * @param $logger
     * @param array $parameters
     */
    public function __construct($logger, $parameters = [])
    {
        $this->logger = $logger;
        $this->parameters = $parameters;
    }

    /**
     * this function works as a chanel for loggin outputs
     * @param $string
     */
    public function output($string){
        echo $string;
    }
}
