<?php

namespace App\Enums;

enum PayoutMethodEnum: string
{
    case BANK = "bank";
    case MOBILE_MONEY = "mobile_money";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
