<?php

namespace Xanpena\SMVC\Schemas;

use Xanpena\SMVC\Schemas\SMVCSchema;


abstract class ReportSchema extends SMVCSchema {

    /*
    |--------------------------------------------------------------------------
    | ReportSchema
    |--------------------------------------------------------------------------
    |
    | This class, created to be inherited, supposes the definition of
    | the SMVC of type Report.
    |
    | The methods are described in the interface definition.
    |
    | @see Xanpena\SMVC\Contracts\SMVCSchemaInterface
    |
    */

    public function full() : array {

        return [
            'H1'                => $this->title(),
            'NAME'              => $this->name(),
            'TABLE'             => $this->table(),
            'FORM'              => $this->form(),
            'MODEL'             => $this->model(),
            'BLOCKED'           => $this->blockedMiddleware(),
            'CONTROL_DATE'      => $this->controlDateMiddleware(),
            'JOINS'             => $this->joins(),
            'LEFT_JOINS'        => $this->leftJoins(),
            'FIELDS_ATTR'       => $this->fields(),
            'PARENT'            => $this->parent(),
            'PARENT_FK'         => $this->parentFK(),
            'MASTER_FK'         => $this->masterFK(),
            'DATA_TABLE'        => $this->dataTable(),
        ];

    }
}
