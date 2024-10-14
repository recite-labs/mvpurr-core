<?php

namespace ReciteLabs\MvpurrCore\Dtos;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexPageData
{
    public string $title = "";
    public string $description = "";
    /*
     * @return array<TableHeader>
     */
    public array $header = [];
    public AnonymousResourceCollection $data;
    /*
     * @return array<ActionButtonData>
     */
    public array $actions = [];
}
