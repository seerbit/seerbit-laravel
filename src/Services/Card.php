<?php


namespace SeerbitLaravel\Services;

use Seerbit\Service\Card\CardService;
use Seerbit\Client;


class Card
{


    /**
     * @var Client
     */
    private static $_client;

    /**
     * Momo constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        self::$_client = $client;
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function AuthorizeOnetime(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->AuthorizeOneTime($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function AuthorizeWithToken(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->AuthorizeWithToken($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function Capture(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->Capture($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function Cancel(array $payload){
        $service = new CardService(self::$_client);
        return $service->Cancel($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function Refund(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->Refund($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function Tokenize(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->Tokenize($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function Non3DSOneTime(array $payload){
        $service = new CardService(self::$_client);
        return $service->ChargeNon3DOneTime($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function Non3DSWithToken(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->ChargeNon3DSWithToken($payload)->toArray();
    }
}
