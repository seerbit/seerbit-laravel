<?php


namespace SeerbitLaravel\Services;

use Seerbit\Service\Order\OrderService;
use Seerbit\Client;

class Order
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

    public static function Create(array $payload){
        $service = new OrderService(self::$_client);
        return $service->Create($payload)->toArray();
    }
}
