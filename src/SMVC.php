<?php

namespace Xanpena\SMVC;

class SMVC {

    /*
    |--------------------------------------------------------------------------
    | SMVC
    |--------------------------------------------------------------------------
    |
    | This is the main class of the SMVC dessign pattern that will allow you
    | to generate CRUDS and views automatically, based on a single configuration
    | file for each section you want to create.
    |
    |
    */

    /**
     * Get config schema constants.
     */
    public static function getSchemas() : array {

        return config('schemas');
    }

    /**
     * Get schema types.
     */
    public static function types() {
        return array_keys(self::getSchemas());
    }

    /**
     * Get object instance of specified Schema.
     */
    public static function get(string $name) : object {

        if (array_key_exists($name, self::getSchemas()['CRUD'])) {
            $schema = '\Src\Schemas\CRUD\\'.self::getSchemas()['CRUD'][$name];
            return (new $schema);
        }
        
        if (array_key_exists($name, self::getSchemas()['Progressive'])) {
            $schema = '\Src\Schemas\Progressive\\'.self::getSchemas()['Progressive'][$name];
            return (new $schema);
        }

        foreach (self::types() as $index => $type) {
            if ($type != 'CRUD') {
                foreach (self::getSchemas()[$type] as $parent_module => $schemas) {
                    if (array_key_exists($name, self::getSchemas()[$type][$parent_module])) {
                        $schema = '\Src\Schemas\\'.$type.'\\'.self::getSchemas()[$type][$parent_module][$name];
                        return (new $schema);
                    }
                }

            }
        }

        throw new \Exception("No se ha encontrado el schema con nombre $name en el archivo config/schemas.php.También puede ser que hayas definido mal la propiedad name en el propio schema. Si estás en la vista de show en este momento, puede ser que hayas definido mal el nombre de un tabView o un bottomView. Por último si el problema persiste, es posible que tengas una etiqueta de traducción mal escrita en /resources/lang y que no esté encontrando coincidencia con el nombre del schema.");
    }
}
