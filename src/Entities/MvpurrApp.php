<?php

namespace ReciteLabs\MvpurrCore\Entities;

class MvpurrApp
{
    private $dependencies = [];
    public function __construct(public string $code, public string $label, public ?string $dashboardLink)
    {
    }

    public function setDependencies($dependencies)
    {
        $this->dependencies = $dependencies;
    }
}
