<?php

namespace ReciteLabs\MvpurrCore\Ui;

class FormField
{
    public function __construct(
        public string $label,
        public FieldType $type,
        public $value,
    )
    {
    }
}
