<?php

namespace ReciteLabs\MvpurrCore\Ui;

class ButtonCard
{
    public $type = 'button-card';
    public function __construct(
        public string $title,
        public string $description,
        public ActionButtonData $button,
        public $align = "left"
    )
    {
    }
}
