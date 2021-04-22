<?php

namespace Lemaur\CmsNova;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lemaur\CmsNova\CmsNova
 */
class CmsNovaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel_cms_nova';
    }
}
