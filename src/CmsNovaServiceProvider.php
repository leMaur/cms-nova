<?php

namespace Lemaur\CmsNova;

use Lemaur\CmsNova\Commands\CmsNovaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsNovaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-cms-nova');
    }
}
