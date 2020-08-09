<?php

namespace SeerbitLaravel;

use Seerbit\Client;

/**
 * Class SeerbitService
 * @package SeerbitLaravel
 */


class SeerbitService implements ISeerbitService
{

    /**
     * @var
     */
    private static $_client;

    /**
     * SeerbitService constructor.
     * @param $client
     */
    public function __construct(Client $client)
    {
        self::$_client = $client;
    }

        /**
     * @return Services\Account
     */
    public static function Account(){
        return new \SeerbitLaravel\Services\Account(self::$_client);
    }

    /**
     * @return Services\Standard
     */
    public static function Standard(){
        return new \SeerbitLaravel\Services\Standard(self::$_client);
    }

    /**
     * @return Services\Momo
     */
    public static function Mobile(){
        return new \SeerbitLaravel\Services\Momo(self::$_client);
    }

    /**
     * @return Services\Card
     */
    public static function Card(){
        return new \SeerbitLaravel\Services\Card(self::$_client);
    }

    /**
     * @return Services\Resources
     */
    public static function Resources(){
        return new \SeerbitLaravel\Services\Resources(self::$_client);
    }

    /**
     * @return Services\Recurrent
     */
    public static function Recurrent(){
        return new \SeerbitLaravel\Services\Recurrent(self::$_client);
    }
}
