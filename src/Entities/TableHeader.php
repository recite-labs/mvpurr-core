<?php

namespace ReciteLabs\MvpurrCore\Entities;

class TableHeader
{
    public function __construct(
        public string $id,
        public string $label,
        public TableColumnType $type,
    ) {}
}
