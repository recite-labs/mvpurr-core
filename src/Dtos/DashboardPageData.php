<?php

namespace ReciteLabs\MvpurrCore\Dtos;

use ReciteLabs\MvpurrCore\Ui\StatCard;

class DashboardPageData
{
    public string $title = '';

    public string $description = '';

    /**
     * @return StatCard[]
     */
    public array $stats = [];
}
