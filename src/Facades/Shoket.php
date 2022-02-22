<?php

namespace Shoket\LaravelShoket\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shoket\LaravelShoket\LaravelShoket
 */
class Shoket extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shoket';
    }
}
