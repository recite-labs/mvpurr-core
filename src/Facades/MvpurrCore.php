<?php

namespace ReciteLabs\MvpurrCore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ReciteLabs\MvpurrCore\MvpurrCore
 */
class MvpurrCore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ReciteLabs\MvpurrCore\MvpurrCore::class;
    }
}
