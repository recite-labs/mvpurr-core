<?php

namespace ReciteLabs\MvpurrCore\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class GenerateController extends GeneratorCommand
{
    protected $signature = 'make:controller {name} {--module=}';
    protected $description = 'Create controller for a module.';
    protected $type = "Controller";

    public function handle()
    {
        $module = $this->option('module');
        if(!$module) {
            $this->error('No module specified');
            return false;
        }

        return parent::handle();
    }

    protected function getStub()
    {
        return __DIR__."/../../../stubs/controller.stub";
    }

    protected function getPath($name)
    {
        return base_path("Modules/".$this->option('module')."/Http/Controllers/".$this->argument('name').".php");
    }

    protected function replaceClass($stub, $name)
    {
        $module = $this->option('module');
        $namespace = "Modules\\".$module."\\Http\Controllers";

        return str_replace(array('$NAMESPACE$','$CLASS_NAME$', '$APP_NAME$'), array($namespace,$this->argument('name'), $module), $stub);
    }
}
