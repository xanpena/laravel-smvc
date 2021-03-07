<?php

namespace Xanpena\SMVC\Contracts;

use Xanpena\SMVC\Contracts\SMVCSchemaInterface;

interface ChartSchemaInterface extends SMVCSchemaInterface
{

    /**
     * Get the chats configuration values.
     */
    public function charts() : array;
}
