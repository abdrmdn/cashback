<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;
use source\util\Domains;

class SBCommandRedeem extends SBCommands implements SBCommandsInterface
{
    private $domainsURIs = [
        Domains::SINGAPORE => '=> https://' . Domains::SINGAPORE,
        Domains::MALAYSIA => '=> https://' . Domains::MALAYSIA,
        Domains::INDONESIA => '=> https://' . Domains::INDONESIA,
        Domains::TAIWAN => '=> https://' . Domains::TAIWAN,
        Domains::THAILAND => '=> https://' . Domains::THAILAND,
        Domains::INTERNATIONAL => '=> https://' . Domains::INTERNATIONAL,
    ];

    /**
     *
     */
    public function exec()
    {
        $domain = $this->parameters[0];
        $domainUrl = $this->getDomainUrl($domain);

        $this->output('Visit ' . $domainUrl . ' to start earning cashback!');
    }

    private function getDomainUrl($domain)
    {
        if (!isset($this->domainsURIs[$domain])) {
            throwError('domain provided does not exist');
        }

        return $this->domainsURIs[$domain];
    }
}
