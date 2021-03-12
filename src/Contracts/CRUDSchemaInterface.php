<?php

namespace Xanpena\SMVC\Contracts;

use Xanpena\SMVC\Contracts\SMVCSchemaInterface;

interface CRUDSchemaInterface extends SMVCSchemaInterface
{

    /**
     * Get values to Kernel::view.
     * Used to generate relateds tabs in a show view.
     */
    public function tabViews() : array;

    /**
     * Get values to Kernel::view.
     * Used to generate relateds bottom views in a show view.
     */
    public function bottomViews() : array;

    /**
     * Get filemanager boolean activation.
     */
    public function filemanager() : bool;

    /**
     * Get singleExports boolean activation.
     */
    public function singleExports() : bool;

    /**
     * Get an array of values to dispaly buttons in views.
     */
    public function buttons() : array;

    /**
     * Get formButtons boolean activation.
     */
    public function formButtons() : bool;

    /**
     * Get newButton boolean activation.
     */
    public function newButton() : bool;

    /**
     * Get the orientation of papper to export documents.
     */
    public function portrait() : string;

    /**
     * Get extra properties definition to dataTables.
     */
    public function dataTable() : array;

    /**
     * Get an array of custom views values definition.
     */
    public function views() : array;

    /**
     * Get activeRecords boolean activation.
     */
    public function activeRecords() : bool;

    /**
     * Get annulledRecords boolean activation.
     */
    public function annulledRecords() : bool;

    /**
     * Get auxiliar Schema name value.
     */
    public function auxSchema() : string;

}
