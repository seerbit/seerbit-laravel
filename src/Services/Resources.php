<?php


namespace SeerbitLaravel\Services;


use Seerbit\Client;
use Seerbit\Service\Resource\ResourceService;

class Resources
{
    private static $_client;

    /**
     * Momo constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        self::$_client = $client;
    }

    public static function Banks(){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new ResourceService(self::$_client);
        return $service->GetBankList()->toArray();
    }
}
