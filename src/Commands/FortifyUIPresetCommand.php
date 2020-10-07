<?php

namespace YourNamespace\FortifyUIPreset\Commands;

use Illuminate\Console\Command;

class FortifyUIPresetCommand extends Command
{
    public $signature = 'fortify-ui:yourpreset';

    public $description = 'Install YourPreset with views and resources';

    public function handle()
    {
        $this->publishAssets();

        $this->comment('YourPreset is now installed.');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'resources', '--force' => true]);
    }
}
