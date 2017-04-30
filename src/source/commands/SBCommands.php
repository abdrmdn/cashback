<?php

namespace source\commands;


class SBCommands
{
    private $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    /**
     * this function works as a chanel for loggin outputs
     * @param $string
     */
    public function output($string){
        echo $string;
    }
}
