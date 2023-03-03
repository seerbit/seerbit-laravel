<?php

namespace SeerbitLaravel\Facades;

use Illuminate\Support\Facades\Facade;


class Seerbit extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'seerbit';
    }
}
