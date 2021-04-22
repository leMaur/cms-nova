<?php

namespace Lemaur\CmsNova;

use Lemaur\CmsNova\Commands\CmsNovaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsNovaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel_cms_nova')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_cms_nova_table')
            ->hasCommand(CmsNovaCommand::class);
    }
}
