<?php

namespace Shoket\Laravel\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Shoket\Laravel\ShoketServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [ShoketServiceProvider::class,];
    }
}
