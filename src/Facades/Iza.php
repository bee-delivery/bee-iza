<?php

namespace Beedelivery\Iza\Facades;

use Illuminate\Support\Facades\Facade;

class Iza extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'iza';
    }
}