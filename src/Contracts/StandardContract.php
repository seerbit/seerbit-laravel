<?php

namespace SeerbitLaravel\Contracts;

interface StandardContract
{
    public static function Initialize(array $payload);
    public static function ValidateStatus(string $transaction_reference);
}
