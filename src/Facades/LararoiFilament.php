<?php

namespace AichaDigital\LararoiFilament\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AichaDigital\LararoiFilament\LararoiFilament
 */
class LararoiFilament extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AichaDigital\LararoiFilament\LararoiFilament::class;
    }
}
