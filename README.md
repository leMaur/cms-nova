# Laravel Cms for Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lemaur/cms-nova.svg?style=flat-square)](https://packagist.org/packages/lemaur/cms-nova)
[![Total Downloads](https://img.shields.io/packagist/dt/lemaur/cms-nova.svg?style=flat-square)](https://packagist.org/packages/lemaur/cms-nova)
[![License](https://img.shields.io/packagist/l/lemaur/cms-nova.svg?style=flat-square&color=yellow)](https://github.com/leMaur/cms/blob/master/LICENSE.md)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lemaur/cms-nova/run-tests?label=tests&style=flat-square)](https://github.com/lemaur/cms-nova/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lemaur/cms-nova/Check%20&%20fix%20styling?label=code%20style&style=flat-square)](https://github.com/lemaur/cms-nova/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![GitHub Sponsors](https://img.shields.io/github/sponsors/lemaur?style=flat-square&color=ea4aaa)](https://github.com/sponsors/leMaur)
[![Trees](https://img.shields.io/badge/dynamic/json?color=yellowgreen&style=flat-square&label=Trees&query=%24.total&url=https%3A%2F%2Fpublic.offset.earth%2Fusers%2Flemaur%2Ftrees)](https://ecologi.com/lemaur?r=6012e849de97da001ddfd6c9)

## Support Me

Hey folks,

Do you like this package? Do you find it useful and it fits well in your project?

I am glad to help you, and I would be so grateful if you considered supporting my work.

You can even choose 😃:
* You can [sponsor me 😎](https://github.com/sponsors/leMaur) with a monthly subscription.
* You can [buy me a coffee ☕ or a pizza 🍕](https://github.com/sponsors/leMaur?frequency=one-time&sponsor=leMaur) just for this package.
* You can [plant trees 🌴](https://ecologi.com/lemaur?r=6012e849de97da001ddfd6c9). By using this link we will both receive 30 trees for free and the planet (and me) will thank you. 
* You can "Star ⭐" this repository (it's free 😉).


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

```php
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
