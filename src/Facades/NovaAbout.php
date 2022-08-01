<?php

namespace RhysLees\NovaAbout\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RhysLees\NovaAbout\NovaAbout
 */
class NovaAbout extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RhysLees\NovaAbout\NovaAbout::class;
    }
}
