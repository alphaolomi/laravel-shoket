# Laravel Shoket Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shoket/laravel-shoket.svg?style=flat-square)](https://packagist.org/packages/shoket/laravel-shoket)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alphaolomi/laravel-shoket/run-tests?label=tests)](https://github.com/alphaolomi/laravel-shoket/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alphaolomi/laravel-shoket/Check%20&%20fix%20styling?label=code%20style)](https://github.com/shoket/laravel-shoket/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shoket/laravel-shoket.svg?style=flat-square)](https://packagist.org/packages/shoket/laravel-shoket)

A simple integration of Shoket's Payments API into your Laravel application.

From Shokets website

"Truly simple payments for your business.
Shoket makes online payments more easier for all kind of business in Tanzania. From startups, small businesses to medium and large businesses."

## Installation
> Requiremnts PHP 8.0+ and Laravel 8+

You can install the package via composer:

```bash
composer require shoket/laravel-shoket
```

<!-- You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-shoket-migrations"
php artisan migrate
``` -->

You can publish the config file with:

```bash
php artisan vendor:publish --tag="shoket-config"
```


- Update the env adding the `SHOKET_API_SECRET`

<!-- This is the contents of the published config file:

```php
return [
    // ...
];
``` -->

## Usage

You can use the `Shoket::makePaymentRequest([...])` method to accept payments.
### Simple and direct
```php
use Shoket\Laravel\Facades\Shoket;

$chargeResponse = Shoket::makePaymentRequest([
    "amount" => "200",
    "customer_name" => "John Doe",
    "email" =>  "john@user.com",
    "number_used" => "255612345678",
    "channel" =>  "Tigo"
]);

// OR
$referenceId = "abcd124";
$chargeResponse = Shoket::verifyPaymentRequest($referenceId, [
    "provider_name" => "Vodacom",
    "provider_code" => "MPESA"
]);
// ...
```

## Avaibale Commands

The package is bundled with 2 commands

- AcceptPayment [WIP]
- VerifyPayment [WIP]

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
