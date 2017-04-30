<?php

namespace source\util\currency;


use source\util\Domains;

class Currencies
{
    public static $domainsCurrencies = [
        Domains::SINGAPORE => 'SGD',
        Domains::MALAYSIA => 'MYR',
        Domains::INDONESIA => 'IDR',
        Domains::TAIWAN => 'TWD',
        Domains::THAILAND => 'THB',
        Domains::INTERNATIONAL => 'USD',
    ];


    public static function getCurrencyFromDomain($domain)
    {
        if (!isset(Self::$domainsCurrencies[$domain])) {
            throw new \Exception('domain doesnt exist');
        }

        return Currencies::$domainsCurrencies[$domain];
    }
}
