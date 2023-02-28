<?php

namespace SeerbitLaravel;

use Seerbit\Client;

/**
 * Class SeerbitService
 * @package SeerbitLaravel
 */


class SeerbitService implements SeerbitServiceContract
{

    /**
     * @var
     */
    private static Client $_client;

    /**
     * SeerbitService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        self::$_client = $client;
    }

        /**
     * @return Services\Account
     */
    public static function Account(): Services\Account
    {
        return new \SeerbitLaravel\Services\Account(self::$_client);
    }

    /**
     * @return Services\Standard
     */
    public static function Standard(): Services\Standard
    {
        return new \SeerbitLaravel\Services\Standard(self::$_client);
    }

    /**
     * @return Services\Momo
     */
    public static function Mobile(): Services\Momo
    {
        return new \SeerbitLaravel\Services\Momo(self::$_client);
    }

    /**
     * @return Services\Card
     */
    public static function Card(): Services\Card
    {
        return new \SeerbitLaravel\Services\Card(self::$_client);
    }

    /**
     * @return Services\Resources
     */
    public static function Resources(): Services\Resources
    {
        return new \SeerbitLaravel\Services\Resources(self::$_client);
    }

    /**
     * @return Services\Recurrent
     */
    public static function Recurrent(): Services\Recurrent
    {
        return new \SeerbitLaravel\Services\Recurrent(self::$_client);
    }

    /**
     * @return Services\Tokenization
     */
    public static function Tokenization(): Services\Tokenization
    {
        return new \SeerbitLaravel\Services\Tokenization(self::$_client);
    }
}
