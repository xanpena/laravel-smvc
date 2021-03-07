<?php

namespace Xanpena\SMVC\Schemas;

use Xanpena\SMVC\Schemas\SMVCSchema;
use Xanpena\SMVC\Contracts\CRUDSchemaInterface;

abstract class CRUDSchema extends SMVCSchema implements CRUDSchemaInterface {

    /*
    |--------------------------------------------------------------------------
    | CRUDSchema
    |--------------------------------------------------------------------------
    |
    | This class, created to be inherited, supposes the definition of
    | the SMVC of type Resource.
    |
    | The methods are described in the interface definition.
    |
    | @see Xanpena\SMVC\Contracts\CRUDInterface
    |
    */

    public $breadcrumbs = '';
    public $tabViews = [];
    public $bottomViews = [];
    public $url = '';
    public $filemanager = false;
    public $singleExports = false;
    public $buttons = [];
    public $formButtons = true;
    public $newButton = true;
    public $parent = 'self';
    public $portrait = 'single';

    public $views = [];
    public $activeRecords = false;
    public $annulledRecords = false;
    public $auxSchema = '';

    public function breadcrumbs() : string {
        return $this->breadcrumbs;
    }

    public function tabViews() : array {
        return $this->tabViews;
    }

    public function bottomViews() : array {
        return $this->bottomViews;
    }

    public function url() : string {
        return $this->url;
    }

    public function filemanager() : bool {
        return $this->filemanager;
    }

    public function singleExports() : bool {
        return $this->singleExports;
    }

    public function buttons() : array {
        return $this->buttons;
    }

    public function formButtons() : bool {
        return $this->formButtons;
    }

    public function newButton() : bool {
        return $this->newButton;
    }

    public function portrait() : string {
        return $this->portrait;
    }

    public function views() : array {
        return $this->views;
    }

    public function activeRecords() : bool {
        return $this->activeRecords;
    }

    public function annulledRecords() : bool {
        return $this->annulledRecords;
    }

    public function auxSchema() : string {
        return $this->auxSchema;
    }

    public function full() : array {

        return [
            'ACTIVE_RECORDS'    => $this->activeRecords(),
            'ANNULED_RECORDS'   => $this->annulledRecords(),
            'H1'                => $this->title(),
            'ICON'              => $this->icon(),
            'NAME'              => $this->name(),
            'TABLE'             => $this->table(),
            'FORM'              => $this->form(),
            'MODEL'             => $this->model(),
            'BLOCKED'           => $this->blockedMiddleware(),
            'CONTROL_DATE'      => $this->controlDateMiddleware(),
            'BREADCRUMBS'       => $this->breadcrumbs(),
            'JOINS'             => $this->joins(),
            'LEFT_JOINS'        => $this->leftJoins(),
            'TAB_VIEWS'         => $this->tabViews(),
            'FIELDS_ATTR'       => $this->fields(),
            'URL'               => $this->url(),
            'FILEMANAGER'       => $this->filemanager(),
            'SINGLE_EXPORTS'    => $this->singleExports(),
            'BUTTONS'           => $this->buttons(),
            'NEW_BUTTON'        => $this->newButton(),
            'FORM_BUTTONS'      => $this->formButtons(),
            'PARENT'            => $this->parent(),
            'PORTRAIT'          => $this->portrait(),
            'DATA_TABLE'        => $this->dataTable(),
            'VIEWS'             => $this->views(),
        ];

    }
}
