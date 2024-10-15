<?php

namespace ReciteLabs\MvpurrCore\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use ReciteLabs\MvpurrCore\Enums\ModuleTypeEnum;
class NewPurrCommand extends Command
{
    public $signature = 'purr:new';

    public $description = 'My command';

    public function handle(): int
    {
        $typeValue = $this->choice(
            'Create new',
            [ModuleTypeEnum::MODULE->label(), ModuleTypeEnum::APP->label()],
        );
        $type = ModuleTypeEnum::fromLabel($typeValue);
        $name = $this->ask('Name of the '.$type->label());

        if($type === ModuleTypeEnum::MODULE) {
            // TODO
        }

        if($type === ModuleTypeEnum::APP) {
            // TODO
        }

        Process::path(base_path())
            ->command('composer dump-autoload')
            ->run()->output();




        $age = $this->anticipate('What is your age?', ['12', '21']);






        if ($this->confirm('Do you wish to continue?')) {
            $this->comment('All done'.$name);
        }

        return self::SUCCESS;
    }
}
