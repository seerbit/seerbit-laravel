<?php


namespace SeerbitLaravel\Services;


use Seerbit\Client;

class Standard
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

    public static function Initialize(array $payload){
        $service = new \Seerbit\Service\Standard\StandardService(self::$_client);
        return $service->Initialize($payload)->toArray();
    }

    public static function ValidateStatus(array $payload){
        $service = new \Seerbit\Service\Status\TransactionStatusService(self::$_client);
        return $service->ValidateTransactionStatus($payload)->toArray();
    }

}
