<?php

namespace Shoket\LaravelShoket\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Shoket\LaravelShoket\ShoketServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [ShoketServiceProvider::class,];
    }
}
