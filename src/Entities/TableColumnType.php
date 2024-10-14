<?php

namespace ReciteLabs\MvpurrCore\Entities;

enum TableColumnType: string
{
    case CHECKBOX = 'checkbox';
    case TEXT = 'text';
    case LINK = 'link';
}
