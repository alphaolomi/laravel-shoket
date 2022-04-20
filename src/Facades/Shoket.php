<?php

namespace Shoket\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shoket\Laravel\Laravel
 */
class Shoket extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'shoket';
    }
}
