<?php

namespace SeerbitLaravel\Services;

use Seerbit\Client;
use Seerbit\Service\Account\AccountService;

class Account
{
    /**
     * @var Client
     */
    private static $_client;

    public function __construct(Client $client)
    {
        self::$_client = $client;
    }

    public static function Authorize(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new AccountService(self::$_client);
        return $service->Authorize($payload)->toArray();
    }

    public static function OtpValidation(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new AccountService(self::$_client);
        return $service->Validate($payload)->toArray();
    }
}
