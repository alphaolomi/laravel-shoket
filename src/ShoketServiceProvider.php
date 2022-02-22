<?php

namespace Shoket\LaravelShoket;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Shoket\LaravelShoket\Commands\LaravelShoketCommand;

class LaravelShoketServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shoket')
            ->hasConfigFile()
            ->hasMigration('create_laravel-shoket_table')
            ->hasCommand(LaravelShoketCommand::class);
    }
}
