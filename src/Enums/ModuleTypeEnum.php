<?php

namespace ReciteLabs\MvpurrCore\Enums;

enum ModuleTypeEnum: int
{
    case MODULE = 0;
    case APP = 1;

    public function label()
    {
        switch ($this) {
            case self::MODULE:
                return 'Module';
            case self::APP:
                return 'App';
        }
    }

    public static function fromLabel($label)
    {
        switch ($label) {
            case 'Module':
                return self::MODULE;
            case 'App':
                return self::APP;
            default:
                throw new \Exception('whaat?');
        }
    }
}
