<?php

namespace Shoket\LaravelShoket\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Shoket\LaravelShoket\ShoketServiceProvider;

class TestCase extends Orchestra
{

    protected function getPackageProviders($app): array
    {
        return [ShoketServiceProvider::class,];
    }
}
