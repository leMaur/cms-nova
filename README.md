# Laravel Cms for Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lemaur/laravel-cms-nova.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel-cms-nova)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel-cms-nova/run-tests?label=tests)](https://github.com/lemaur/laravel-cms-nova/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel-cms-nova/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lemaur/laravel-cms-nova/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/lemaur/laravel-cms-nova.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel-cms-nova)

## Installation

You can install the package via composer:

```bash
composer require lemaur/cms-nova
```

Add those snippets to your `composer.json`:
```bash
"repositories": [
    {
        "type": "composer",
        "url": "https://nova.laravel.com"
    }
],
...
"scripts": {
    "post-update-cmd": [
        "@php artisan nova:publish"
    ]
}
```

You can publish and run the migrations with:

```bash
php artisan nova:install
php artisan migrate
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Maurizio](https://github.com/lemaur)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
