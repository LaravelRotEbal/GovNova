<?php

namespace LaravelRotEbal\GovNova;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelRotEbal\GovNova\Skeleton\SkeletonClass
 */
class GovNovaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'govnova';
    }
}
