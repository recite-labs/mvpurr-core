<?php

namespace ReciteLabs\MvpurrCore\Ui;

class GenericTableCard
{
    public $type = 'generic-table';

    public function __construct(
        public string $title,
        public string $description,
        public array $headers,
        public array $data,
        public $align = "left"
    )
    {
    }
}
