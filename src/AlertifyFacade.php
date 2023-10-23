<?php

namespace Michaelkinc\Alertify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Michaelkinc\Alertify\Skeleton\SkeletonClass
 */
class AlertifyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'alertify';
    }
}
