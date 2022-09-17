<?php

namespace Laraveldesign\Trix;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraveldesign\Trix\Skeleton\SkeletonClass
 */
class TrixFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'trix';
    }
}
