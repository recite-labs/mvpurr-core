<?php

namespace ReciteLabs\MvpurrCore\Ui;

class FieldsCard
{
    public $type = 'fields';
    public function __construct(
        public string $title,
        public string $description,
        public array $fields = [],
        public string $align = "left",
    )
    {
    }
}
