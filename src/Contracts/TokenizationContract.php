<?php
namespace SeerbitLaravel\Contracts;

interface TokenizationContract {
    public static function CreateToken(array $payload);

    public static function ValidateOtp(array $payload);

    public static function GetToken(string $transaction_reference);

    public static function ChargeToken(array $payload);

    public static function ChargeTokenBulk(array $payload);
}

