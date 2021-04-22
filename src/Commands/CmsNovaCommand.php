<?php

namespace Lemaur\CmsNova\Commands;

use Illuminate\Console\Command;

class CmsNovaCommand extends Command
{
    public $signature = 'laravel_cms_nova';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
