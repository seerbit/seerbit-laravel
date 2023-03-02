<?php


namespace SeerbitLaravel\Services;


use Seerbit\Client;
use Seerbit\Service\Card\TokenizeService;
use SeerbitLaravel\Contracts\TokenizationContract;

class Tokenization implements TokenizationContract
{

    private static TokenizeService $_service;

    /**
     * Momo constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $_client = $client;
        self::$_service = new TokenizeService($_client);
    }

    public static function CreateToken(array $payload){
        return self::$_service->CreateToken($payload)->toArray();
    }

    public static function ValidateOtp(array $payload){
        return self::$_service->ValidateOtp($payload)->toArray();
    }

    public static function GetToken(string $transaction_reference){
        return self::$_service->GetToken($transaction_reference)->toArray();
    }

    public static function ChargeToken(array $payload){
        return self::$_service->ChargeToken($payload)->toArray();
    }

    public static function ChargeTokenBulk(array $payload){
        return self::$_service->ChargeTokenBulk($payload)->toArray();
    }
}
