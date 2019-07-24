<?php

namespace Bijondev\Ratesapi\Facades;

use Illuminate\Support\Facades\Facade;

class Ratesapi extends Facade{
    protected static function getFacadeAccessor(){
        return "bijondev-ratesapi";
    }
}
