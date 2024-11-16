<?php

namespace JordanPartridge\TerminalPortfolio\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JordanPartridge\TerminalPortfolio\TerminalPortfolio
 */
class TerminalPortfolio extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JordanPartridge\TerminalPortfolio\TerminalPortfolio::class;
    }
}
