<?php

namespace Xanpena\SMVC\Schemas;

use Xanpena\SMVC\Contracts\SMVCSchemaInterface;

abstract class SMVCSchema implements SMVCSchemaInterface {

    /*
    |--------------------------------------------------------------------------
    | SMVC
    |--------------------------------------------------------------------------
    |
    | This class, created to be inherited, supposes the base definition of
    | the SMVC design pattern.
    |
    */
    const ALIAS     = 'ALIAS';
    const AXIOS     = 'AXIOS';
    const BEHAVIOR  = 'BEHAVIOR';
    const CHANGE    = '@change';
    const CSS       = 'CLASS';
    const COLUMN    = 'COLUMN';
    const DATA      = 'DATA';
    const DEFAULT   = 'DEFAULT';
    const DISABLED  = 'DISABLED';
    const EXPORT    = 'EXPORT';
    const FILTER    = 'FILTER';
    const IMPORT    = 'IMPORT';
    const INIT      = 'INIT';
    const LABEL     = 'LABEL';
    const LEGEND    = 'LEGEND';
    const LINK      = 'LINK';
    const LOCKED    = 'LOCKED';
    const MULTIPLE  = 'MULTIPLE';
    const NAME      = 'NAME';
    const RECORDS   = 'RECORDS';
    const RELATED   = 'RELATED';
    const RULE      = 'RULE';
    const SELECT    = 'SELECT';
    const SHOW      = 'SHOW';
    const SUMMARY   = 'SUMMARY';
    const TARGET    = 'TARGET';
    const TYPE      = 'TYPE';
    const VALUES    = 'VALUES';
    const VDATA     = 'VUE_DATA';
    const VMINIT    = 'MULTI_INIT';
    const VMODEL    = 'v-model';
    const VUE       = 'VUE';
    const WIRE      = 'WIRE';

    public $breadcrumbs = '';
    public $buttons       = [];
    public $newButton     = true;
    public $editButton    = true;
    public $deleteButton  = true;
    public $url = '';
    public $icon = '';
    public $name = '';
    public $table = '';
    public $form = '';
    public $model = '';

    public $joins = [];
    public $leftJoins = [];
    public $wheres = [];
    public $groupBy = '';
    public $orderBy = '';
    public $data = [];
    public $dataEdit = [];
    public $parent = '';
    public $parentFK = '';
    public $masterFK = '';
    public $dataTable = [
        'ACTIONS' => true,
        'TOP_BUTTONS' => false,
        'ADITIONAL_THEAD' => false,
        'SUMMATION' =>  false
    ];

    public $blockedMiddleware = false;
    public $controlDateMiddleware = '';
    public $activeRecords = false;

    public $fields = [];

    public function breadcrumbs() : string|array {
        return $this->breadcrumbs;
    }
    
    public function buttons() : array {
        return $this->buttons;
    }
    
    public function newButton() : bool {
        return $this->newButton;
    }
    
    public function deleteButton() : bool {
        return $this->deleteButton;
    }

    public function editButton() : bool {
        return $this->editButton;
    }

    public function url() : string {
        return $this->url;
    }

    public function title() : string {
        return __('titles.'.$this->name);
    }

    public function icon() : string {
        return $this->icon;
    }

    public function name() : string {
        return $this->name;
    }

    public function table() : string {
        return ($this->table) ? $this->table : str_replace('-', '_', $this->name);
    }

    public function form() : string {
        return $this->form;
    }

    public function model() : string {
        return $this->model;
    }

    public function joins() : array {
        return $this->joins;
    }

    public function leftJoins() : array {
        return $this->leftJoins;
    }

    public function wheres() : array {
        return $this->wheres;
    }

    public function groupBy() : string {
        return $this->groupBy;
    }

    public function orderBy() : ?string {
        return ($this->orderBy) ? $this->orderBy : null;
    }

    public function data() : array {
        return $this->data;
    }

    public function dataEdit() : array {
        return $this->dataEdit;
    }

    public function parent() : string {
        return $this->parent;
    }

    public function parentFK() : string {
        return $this->parentFK;
    }

    public function masterFK() : string {
        return $this->masterFK;
    }

    public function dataTable() : array {
        return $this->dataTable;
    }

    public function blockedMiddleware() : bool {
        return $this->blockedMiddleware;
    }

    public function controlDateMiddleware() : string {
        return $this->controlDateMiddleware;
    }

    public function activeRecords() : bool {
        return $this->activeRecords;
    }

    public function fields() : array {
        return $this->fields;
    }

    public function full() : array {

        return [
            'ACTIVE_RECORDS'    => $this->activeRecords(),
            'H1'                => $this->title(),
            'ICON'              => $this->icon(),
            'NAME'              => $this->name(),
            'TABLE'             => $this->table(),
            'FORM'              => $this->form(),
            'MODEL'             => $this->model(),
            'BLOCKED'           => $this->blockedMiddleware(),
            'CONTROL_DATE'      => $this->controlDateMiddleware(),
            'JOINS'             => $this->joins(),
            'ORDER_BY'          => $this->orderBy(),
            'LEFT_JOINS'        => $this->leftJoins(),
            'FIELDS_ATTR'       => $this->fields(),
            'PARENT'            => $this->parent(),
            'PARENT_FK'         => $this->parentFK(),
            'MASTER_FK'         => $this->masterFK(),
            'DATA_TABLE'        => $this->dataTable(),
        ];

    }
}
