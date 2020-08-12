<?php


namespace SeerbitLaravel\Services;


use Seerbit\Client;
use Seerbit\Service\Recurrent\RecurrentService;
class Recurrent
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

    public static function CreateSubscription(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new RecurrentService(self::$_client);
        return $service->CreateSubscription($payload)->toArray();
    }

    public static function ChargeSubscription(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new RecurrentService(self::$_client);
        return $service->ChargeSubscription($payload)->toArray();
    }

    public static function GetMerchantSubscription(){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new RecurrentService(self::$_client);
        return $service->GetMerchantSubscription()->toArray();
    }

    public static function GetCustomerSubscription(string $customerId){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new RecurrentService(self::$_client);
        return $service->GetCustomerSubscription($customerId)->toArray();
    }

    public static function UpdateSubscription(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new RecurrentService(self::$_client);
        return $service->UpdateSubscription($payload)->toArray();
    }

    public static function ValidateStatus(string $billingId){
        self::$_client->setAuthType(\Seerbit\AuthType::BEARER);
        $service = new \Seerbit\Service\Status\TransactionStatusService(self::$_client);
        return $service->ValidateSubscriptionStatus($billingId)->toArray();
    }

}
