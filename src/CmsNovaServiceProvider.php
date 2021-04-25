<?php

declare(strict_types=1);

namespace Lemaur\CmsNova;

use Lemaur\CmsNova\Console\PublishCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsNovaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('cms-nova')
            ->hasCommand(PublishCommand::class);
    }
}
