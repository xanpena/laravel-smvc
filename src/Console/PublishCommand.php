<?php

namespace Xanpena\SMVC\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'smvc:publish {--force : Overwrite any existing files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the SMVC resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'smvc-config',
            '--force' => $this->option('force'),
        ]);

        /*$this->call('vendor:publish', [
            '--tag' => 'smvc-controller',
            '--force' => $this->option('force'),
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'smvc-traits',
            '--force' => $this->option('force'),
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'smvc-stubs',
            '--force' => $this->option('force'),
        ]);*/
    }
}
