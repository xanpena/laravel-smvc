<?php

namespace Xanpena\SMVC\Console;

use Illuminate\Console\GeneratorCommand;
use InvalidArgumentException;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class MakeCommand extends GeneratorCommand
{

    protected $name = 'make:smvc';

    protected $description = 'Create a new SMVC Schema';

    protected $type = 'SMVC';

    /**
     * Get the stub file for the generator.
     */
    protected function getStub() {
        $stub = null;

        if ($this->option('crud')) {
            return __DIR__ . '/stubs/schema.crud.stub';
        }else if ($this->option('progressive')) {
            return __DIR__ . '/stubs/progressive.crud.stub';
        }else if ($this->option('report')) {
            return __DIR__ . '/stubs/report.crud.stub';
        }else if ($this->option('chart')) {
            return __DIR__ . '/stubs/chart.crud.stub';
        }
        return __DIR__.$stub;
    }

    /**
     * Get the root namespace for the class.
     */
    protected function rootNamespace() {
        return 'Src\\';
    }

    /**
     * Get the default namespace for the class.
     */
    protected function getDefaultNamespace($rootNamespace) {
       
        $destination = 'Src\Schemas';
        if ($this->option('crud')) {
            $destination .= '\CRUD';
        }else if ($this->option('progressive')) {
            $destination .= '\Progressive';
        }else if ($this->option('report')) {
            $destination .= '\Report';
        }else if ($this->option('chart')) {
            $destination .= '\Chart';
        }
   
        return $destination;
    }

    /**
     * Build the class with the given name.
     */
    public function handle() {

        parent::handle();

        $this->info('Remind add a constant for the new SMVC schema to config/schemas.php file.');
    }

    /**
     * Get the destination class path.
     */
    protected function getPath($name) {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return 'Src/'.str_replace('\\', '/', $name).'.php';
    }


    /**
     * Get the console command options.
     */
    protected function getOptions() : array {
        return [
            ['crud', null, InputOption::VALUE_NONE, 'Create a CRUD SMVC Schema.'],
            ['progressive', null, InputOption::VALUE_NONE, 'Create a Progressive SMVC Schema.'],
            ['report', null, InputOption::VALUE_NONE, 'Create a Report SMVC Schema.'],
            ['chart', null, InputOption::VALUE_NONE, 'Create a Chart SMVC Schema.'],
        ];
    }


}