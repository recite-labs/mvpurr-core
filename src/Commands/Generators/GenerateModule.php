<?php

namespace ReciteLabs\MvpurrCore\Commands\Generators;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

class GenerateModule extends Command
{
    // Define the name and signature of the command
    protected $signature = 'make:module {name}';

    // Command description
    protected $description = 'Create a new module';

    // Filesystem instance for handling file creation
    protected $files;

    // Constructor to inject Filesystem
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    // The command handler
    public function handle()
    {
        // Get the module name from the command argument
        $moduleName = $this->argument('name');

        // Define the path where the module will be created
        $modulePath = base_path('Modules/'.$moduleName);

        // Check if the module already exists
        if ($this->files->isDirectory($modulePath)) {
            $this->error("Module '{$moduleName}' already exists!");

            return;
        }

        // Create the module directory structure
        $this->createModuleDirectories($modulePath);

        // Optional: Create other default files for the module (like ServiceProvider, routes, etc.)
        // e.g. $this->createDefaultFiles($modulePath, $moduleName);

        // Confirm successful creation
        $this->info("Module '{$moduleName}' created successfully.");

        Artisan::call('make:base-controller '.$moduleName);
        Artisan::call('make:controller IndexController --module='.$moduleName);
    }

    // Helper function to create the directory structure
    protected function createModuleDirectories($modulePath)
    {
        $directories = [
            'Http/Controllers',
            'Models',
            'Providers',
            'database/migrations',
            'database/seeders',
            'routes',
        ];

        // Create each directory
        foreach ($directories as $dir) {
            $this->files->makeDirectory("{$modulePath}/{$dir}", 0755, true);
        }

        // Create an empty route file
        $this->files->put("{$modulePath}/routes/web.php", "<?php\n\n// Define routes for {$this->argument('name')}");
    }
}
