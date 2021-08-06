<?php

namespace Wahlemedia\Utilities\Commands;

use Illuminate\Console\Command;

class UtilitiesCommand extends Command
{
    public $signature = 'laravel-utilities';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
