# Nova About

This is a package to add about information for Laravel Nova.

![image](https://user-images.githubusercontent.com/43909932/182262291-21e40655-2b77-46c8-958f-9c0d5882a28a.png)



## Installation

You can install the package via composer to your project or to your nova package.

```bash
composer require rhyslees/nova-about
```

## Usage in your project
```bash
php artisan about
php artisan about --only=nova,nova_packages
php artisan about --only=nova
php artisan about --only=nova_packages
```


## Usage in your Nova package

```php
//YourPackageServiceProvider.php

/**
 * Register any application services.
 *
 * @return void
 */
public function register(): void
{
    \RhysLees\NovaAbout\NovaAbout::addPackage('your-name/your-package');
}
```

This will add your package to the Nova Packages section on the about command as seen below. It will also add the installed version of your package automatically.

![image](https://user-images.githubusercontent.com/43909932/182262317-3c11b16f-e90a-49ad-9cda-4145cfdfed39.png)



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Rhys Lees](https://github.com/RhysLees)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
