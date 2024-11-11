<?php

namespace ReciteLabs\MvpurrCore\Traits;

use Inertia\Inertia;
use ReciteLabs\MvpurrCore\Dtos\DashboardPageData;

trait Dashboardable
{
    protected DashboardPageData $data;

    public function __invoke()
    {
        return Inertia::render('Mvpurr', [
            'theme' => app('mvpurr')->theme,
            'page' => 'Crud/Dash',
            'data' => $this->data,
            'menu' => $this->menu(),
            'app' => $this->app,
        ]);
    }
}
