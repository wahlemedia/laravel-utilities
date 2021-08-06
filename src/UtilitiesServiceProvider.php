<?php

namespace Wahlemedia\Utilities;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wahlemedia\Utilities\Commands\UtilitiesCommand;

class UtilitiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-utilities')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-utilities_table')
            ->hasCommand(UtilitiesCommand::class);
    }
}
