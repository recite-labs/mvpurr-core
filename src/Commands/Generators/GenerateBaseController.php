<?php

namespace ReciteLabs\MvpurrCore\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class GenerateBaseController extends GeneratorCommand
{
    protected $signature = 'make:base-controller {name}';
    protected $description = 'Create base controller for a module.';
    protected $type = "Controller";

    protected function getStub()
    {
        return __DIR__."/../../../stubs/base-controller.stub";
    }

    protected function getPath($name)
    {
        return base_path("Modules/".$this->argument('name')."/Http/Controllers/BaseController.php");
    }

    protected function replaceClass($stub, $name)
    {
        $module = $this->argument('name');
        $namespace = "Modules\\".$module."\\Http\Controllers";

        return str_replace(array('$NAMESPACE$', '$APP_NAME$'), array($namespace, $module), $stub);
    }
}
