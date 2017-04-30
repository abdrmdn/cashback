<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;
use source\util\currency\Currencies;
use source\util\Domains;

class SBCommandSignup extends SBCommands implements SBCommandsInterface
{

    private $domainsRewards = [
        Domains::SINGAPORE => 5,
        Domains::MALAYSIA => 10,
        Domains::INDONESIA => 25.00,
        Domains::TAIWAN => 1000,
        Domains::THAILAND => 500,
        Domains::INTERNATIONAL => 5,
    ];

    /**
     *
     */
    public function exec()
    {
        $domain = $this->parameters[0];
        $currency = Currencies::getCurrencyFromDomain($domain);
        $reward = $this->getSignupReward($domain);

        $this->output($domain . ' => ' . $currency . ' ' . $reward);
    }

    private function getSignupReward($domain)
    {
        return isset($this->domainsRewards[$domain]) ? $this->domainsRewards[$domain] : 0;
    }
}
