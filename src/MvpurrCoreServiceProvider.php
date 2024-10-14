<?php

namespace ReciteLabs\MvpurrCore;

use ReciteLabs\MvpurrCore\Entities\Mvpurr;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ReciteLabs\MvpurrCore\Commands\MvpurrCoreCommand;

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
            ->hasCommand(MvpurrCoreCommand::class);
    }

    public function register()
    {
        $this->app->singleton('mvpurr', function($app){
            return new Mvpurr();
        });
        return parent::register();
    }
}
