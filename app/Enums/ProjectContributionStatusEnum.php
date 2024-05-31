<?php

namespace App\Enums;

enum ProjectContributionStatusEnum: string
{
    case CREATED = "created";
    case PAID = "paid";
    case REFUNDED = "refunded";
    case DISPUTED = "disputed";
    case CANCELLED = "cancelled";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
