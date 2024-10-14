<?php

namespace ReciteLabs\MvpurrCore\Entities;


class Mvpurr
{
    public $apps = [];
    public $theme = 'default';

    public function add(MvpurrApp $app)
    {
        $this->apps[$app->code] = $app;
    }

    public function get($key = null)
    {
        if($key)
            return $this->apps[$key] ?? null;
        return $this->apps;
    }
}
