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
     * Get object instance of specified PlxSchema.
     */
    public static function get(string $name) : object {

        foreach(self::types() as $type) {
            if(array_key_exists($name, self::getSchemas()[$type])) {
                $schema = '\Src\Schemas\\'.$type.'\\'.self::getSchemas()[$type][$name];
                return (new $schema);
            }
        }
    }
}
