<?php


namespace SeerbitLaravel\Services;

use  Seerbit\Client;

class Momo
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

    public static function Authorize(array $payload){
        $service = new \Seerbit\Service\Mobile\MobileService(self::$_client);
        return $service->Authorize($payload)->toArray();
    }

    public static function Networks(){
        $service = new \Seerbit\Service\Mobile\MobileService(self::$_client);
        return $service->Networks()->toArray();
    }
}
