<?php

namespace Xanpena\SMVC\Contracts;

interface SMVCSchemaInterface
{

    /**
     * Get the translable title value.
     */
    public function title() : string;

    /**
     * Get icon name value.
     */
    public function icon() : string;

    /**
     * Get the name value.
     */
    public function name() : string;

    /**
     * Get the table name value. If not exists is calculating by name.
     */
    public function table() : string;

    /**
     * Get the form name value.
     */
    public function form() : string;

    /**
     * Get model name value.
     */
    public function model() : string;

    /**
     * Get the "JOIN" string values to make SQL sentences.
     * Used by dataTables.
     */
    public function joins() : array;

    /**
     * Get the "LEFT JOIN" string values to make SQL sentences.
     * Used by dataTables.
     */
    public function leftJoins() : array;

    /**
     * Get the "WHERE" string values to make SQL sentences.
     * Used by dataTables.
     */
    public function wheres() : array;

    /**
     * Get the "GROUP BY" string values to make SQL sentences.
     * Used by dataTables.
     */
    public function groupBy() : string;

    /**
     * Get values to Kernel::data().
     * Used to populate inputs select in form views.
     */
    public function data() : array;

    /**
     * Get values to Kernel::data.
     * Used to populate inputs select only in edit form views.
     */
    public function dataEdit() : array;

    /**
     * Get parent Schema name value.
     */
    public function parent() : string;

    /**
     * Get parent Schema PK field name.
     */
    public function parentFK() : string;

    /**
     * Get master field name to VueComponents.
     */
    public function masterFK() : string;

    /**
     * Get extra properties to dataTables.
     */
    public function dataTable() : array;

    /**
     * Get blockedMiddleware boolean activation.
     */
    public function blockedMiddleware() : bool;

    /**
     * Get controlDateMiddleware boolean activation.
     */
    public function controlDateMiddleware() : string;

    /**
     * Get activeRecords boolean activation.
     */
    public function activeRecords() : bool;

    /**
     * Get the field values.
     */
    public function fields() : array;

    /**
     * Get the full Schema definition.
     */
    public function full() : array;
}
