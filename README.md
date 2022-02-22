# Laravel Shoket Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shoket/laravel-shoket.svg?style=flat-square)](https://packagist.org/packages/shoket/laravel-shoket)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/shoket/laravel-shoket/run-tests?label=tests)](https://github.com/alphaolomi/laravel-shoket/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alphaolomi/laravel-shoket/Check%20&%20fix%20styling?label=code%20style)](https://github.com/shoket/laravel-shoket/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shoket/laravel-shoket.svg?style=flat-square)](https://packagist.org/packages/shoket/laravel-shoket)

> 🚧 This is a work in progress.

A simple integration of Shoket's Payments API into your Laravel application.

## Installation

You can install the package via composer:

```bash
composer require shoket/laravel-shoket
```

<!-- You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-shoket-migrations"
php artisan migrate
``` -->

<!-- You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-shoket-config"
``` -->

<!-- This is the contents of the published config file:

```php
return [
    // ...
];
``` -->

## Usage

Using the Shoket Facade is easy. You can use the `Shoket::receive([...])` method to accept payments.

```php
use Shoket\Facades\Shoket;
echo Shoket::receive([
    'amount' => '10.00',
    'network' => 'tigo'
    ]);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Alpha Olomi](https://github.com/alphaolomi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
