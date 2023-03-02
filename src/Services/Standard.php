<?php


namespace SeerbitLaravel\Services;


use Seerbit\Client;
use SeerbitLaravel\Contracts\StandardContract;

class Standard implements StandardContract
{
    private static Client $_client;

    /**
     * Standard constructor.
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

    public static function ValidateStatus(string $transaction_reference){
        $service = new \Seerbit\Service\Status\TransactionStatusService(self::$_client);
        return $service->ValidateTransactionStatus($transaction_reference)->toArray();
    }

}
