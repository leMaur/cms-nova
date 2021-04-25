# Laravel Cms for Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lemaur/laravel-cms-nova.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel-cms-nova)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel-cms-nova/run-tests?label=tests)](https://github.com/lemaur/laravel-cms-nova/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel-cms-nova/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lemaur/laravel-cms-nova/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/lemaur/laravel-cms-nova.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel-cms-nova)

## Installation

Add those snippets to your `composer.json` before installing the package:
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
        "@php artisan nova:publish",
        "@php artisan view:clear"
    ]
}
```

You can install the package via composer:

> You will be prompted to provide your login credentials for the Nova website. 
These credentials will authenticate your Composer session as having permission to download the Nova source code. 
To avoid manually typing these credentials, you may create a [Composer auth.json file](https://getcomposer.org/doc/articles/authentication-for-private-packages.md#authentication-in-auth-json-per-project) while optionally using your API token in place of your password.

```bash
composer require lemaur/cms-nova
```

You can launch the installation:

```bash
php artisan cms-nova:install
```

You can create a new user to access to Nova:

```bash
php artisan nova:user
```

Within your `app/Providers/NovaServiceProvider.php` file, there is a `gate` method. 
This authorization gate controls access to Nova in **non-local** environments. 
By default, any user can access the Nova dashboard when the current application environment is `local`. 
You are free to modify this gate as needed to restrict access to your Nova installation:

```bash
/**
 * Register the Nova gate.
 *
 * This gate determines who can access Nova in non-local environments.
 *
 * @return void
 */
protected function gate()
{
    Gate::define('viewNova', function ($user) {
        return in_array($user->email, [
            'taylor@laravel.com',
        ]);
    });
}
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
