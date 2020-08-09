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
    public static function CardAuthorizeOnetime(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->AuthorizeOneTime($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardAuthorizeWithToken(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->AuthorizeWithToken($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardCapture(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->Capture($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardCancel(array $payload){
        $service = new CardService(self::$_client);
        return $service->Cancel($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardRefund(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->Refund($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardTokenize(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->Tokenize($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardNon3DSOneTime(array $payload){
        $service = new CardService(self::$_client);
        return $service->ChargeNon3DOneTime($payload)->toArray();
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public static function CardNon3DWithToken(array $payload){
        self::$_client->setAuthType(\Seerbit\AuthType::BASIC);
        $service = new CardService(self::$_client);
        return $service->ChargeNon3DSWithToken($payload)->toArray();
    }
}
