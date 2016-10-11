<?php

namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;

class Helper extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'helper';
    }
}