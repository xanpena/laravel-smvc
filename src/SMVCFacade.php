<?php

namespace Xanpena\SMVC;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xanpena\SMVC\SMVC
 */
class SMVCFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor() : string {
        return 'SMVC';
    }
}
