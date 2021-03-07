<?php

namespace Xanpena\SMVC\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{

    protected $signature = 'smvc:install';

    protected $description = 'Install all of the SMVC resources';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$this->comment('Publishing SMVC Service Provider...');
       // $this->callSilent('vendor:publish', ['--tag' => 'smvc-provider']);

        $this->comment('Publishing SMVC Assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'smvc-assets']);

        $this->comment('Publishing SMVC Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'smvc-config']);

        $this->comment('Publishing SMVC Controller...');
        $this->callSilent('vendor:publish', ['--tag' => 'smvc-controller']);

        $this->info('SMVC scaffolding installed successfully.');
    }

}
