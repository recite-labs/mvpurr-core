<?php

namespace ReciteLabs\MvpurrCore\Commands;

use Illuminate\Console\Command;

class MvpurrCoreCommand extends Command
{
    public $signature = 'mvpurr-core';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
