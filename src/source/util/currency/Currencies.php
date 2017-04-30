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
        return (isset(Self::$domainsCurrencies[$domain])) ? Currencies::$domainsCurrencies[$domain] : null;
    }
}
