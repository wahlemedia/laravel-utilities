<?php

namespace Wahlemedia\Utilities;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wahlemedia\Utilities\Utilities
 */
class UtilitiesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-utilities';
    }
}
