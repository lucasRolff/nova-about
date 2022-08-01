<?php

namespace RhysLees\NovaAbout;

use RhysLees\NovaAbout\Commands\NovaAboutCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NovaAboutServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nova-about')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nova-about_table')
            ->hasCommand(NovaAboutCommand::class);
    }
}
