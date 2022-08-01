<?php

namespace RhysLees\NovaAbout\Commands;

use Illuminate\Console\Command;

class NovaAboutCommand extends Command
{
    public $signature = 'nova-about';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
