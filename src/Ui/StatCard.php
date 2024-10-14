<?php

namespace ReciteLabs\MvpurrCore\Ui;

class StatCard
{
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $figure
    ) {}
}
