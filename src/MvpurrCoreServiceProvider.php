<?php

namespace ReciteLabs\MvpurrCore;

use ReciteLabs\MvpurrCore\Commands\Generators\GenerateBaseController;
use ReciteLabs\MvpurrCore\Commands\Generators\GenerateController;
use ReciteLabs\MvpurrCore\Commands\Generators\GenerateModule;
use ReciteLabs\MvpurrCore\Commands\MvpurrCoreCommand;
use ReciteLabs\MvpurrCore\Commands\NewPurrCommand;
use ReciteLabs\MvpurrCore\Entities\Mvpurr;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MvpurrCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mvpurr-core')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_mvpurr_core_table')
            ->hasCommands([
                MvpurrCoreCommand::class,
                NewPurrCommand::class,
                GenerateModule::class,
                GenerateBaseController::class,
                GenerateController::class,
            ]);
    }

    public function register()
    {
        $this->app->singleton('mvpurr', function ($app) {
            return new Mvpurr;
        });
        // register all modules
        try {
            $modules = json_decode(file_get_contents(base_path('modules.json')));
            foreach ($modules->modules as $module) {
                $this->app->register($module->provider);
            }
        } catch (\Exception $exception) {
            // TODO
        }

        return parent::register();
    }
}
