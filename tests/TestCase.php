<?php

namespace Tests;

use Lemaur\CmsNova\CmsNovaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CmsNovaServiceProvider::class,
        ];
    }
}
