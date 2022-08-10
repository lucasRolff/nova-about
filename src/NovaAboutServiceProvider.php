<?php

namespace RhysLees\NovaAbout;

use Illuminate\Foundation\Console\AboutCommand;
use Laravel\Nova\Nova;
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
            ->name('nova-about');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();

        AboutCommand::add('Nova', [
            'Version' => fn () => Nova::version(),
            'License Key' => fn () => $this->validLicenseKey() ? '<fg=green;options=bold>Valid</>' : '<fg=red;options=bold>Invalid</>',

            'Name' => fn () => config('nova.name'),
            'Path' => fn () => Nova::path(),

            'Theme Switcher' => fn () => Nova::$withThemeSwitcher ? '<fg=yellow;options=bold>Enabled</>' : 'OFF',
            'RTL Enabled' => fn () => Nova::rtlEnabled() ? '<fg=yellow;options=bold>Enabled</>' : 'OFF',
            'Pagination' => fn () => $this->resolvePaginationValue(),
            'Storage Disk' => fn () => config('nova.storage_disk'),
            'Currency' => fn () => config('nova.currency'),

            'Notification Center' => fn () => Nova::$withNotificationCenter ? '<fg=yellow;options=bold>Enabled</>' : 'OFF',
            'Notification Polling' => fn () => Nova::$notificationPollingInterval.'s',

            'Authentication' => fn () => Nova::$withAuthentication ? '<fg=yellow;options=bold>Enabled</>' : 'OFF',
            'Authentication Guard' => fn () => config('nova.guard'),

            'Password Reset' => fn () => Nova::$withPasswordReset ? '<fg=yellow;options=bold>Enabled</>' : 'OFF',
            'Password Reset Broker' => fn () => config('nova.passwords'),

            'Global Search' => fn () => Nova::$withGlobalSearch ? '<fg=yellow;options=bold>Enabled</>' : 'OFF',
            'Global Debounce' => fn () => Nova::$debounce.'s',
        ]);

        // Add Nova Packages to the About Command
        NovaAbout::addPackage('rhyslees/nova-about');
    }

    protected function validLicenseKey(): bool
    {
        $response = Nova::checkLicense();

        return $response->status() == 204;
    }

    protected function resolvePaginationValue(): string
    {
        $pagination = config('nova.pagination');

        if (
            $pagination != 'simple' &&
            $pagination != 'load-more' &&
            $pagination != 'links'
        ) {
            $pagination = '<fg=red;options=bold>Invalid</>';
        }

        return $pagination;
    }
}
