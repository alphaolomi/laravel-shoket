<?php

namespace Shoket\LaravelShoket;

use Shoket\LaravelShoket\Commands\ShoketCommand;
use Shoket\SDK\Shoket;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShoketServiceProvider extends PackageServiceProvider
{
    public function packageRegistered()
    {
        // Register a class in the service container
        $this->app->bind('shoket', function () {
            if (!config('shoket.apiSecret')) {
                throw new \Exception('You must set the SHOKET_API_SECRET env variable.');
            }
            return new Shoket();
        });
    }

    public function configurePackage(Package $package): void
    {
        /** More info: https://github.com/spatie/laravel-package-tools */
        $package
            ->name('shoket')
            ->hasConfigFile('shoket')
            ->hasCommand(ShoketCommand::class);
    }
}
