<?php

namespace ReciteLabs\MvpurrCore\Ui;

class ActionButtonData
{
    public function __construct(
        public string $label,
        public string $url,
        public string $method = "post",
        public bool $isQuick = false,
    )
    {
    }
}
