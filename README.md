# Nova About

This is a package to add about information for Laravel Nova.


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
\RhysLees\NovaAbout\NovaAbout::addPackage('your-name/your-package');
```

This will add your package to the Nova Packages section on the about command as seen below. It will also add the installed version of your package automatically.


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Rhys Lees](https://github.com/RhysLees)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
