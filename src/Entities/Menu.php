<?php

namespace ReciteLabs\MvpurrCore\Entities;

class Menu
{
    public function __construct(
        public string $id,
        public string $label,
        public string $icon,
        public string $link,
        public string $name,
        public ?array $children,
    ) { }

}
