<?php

namespace App\Enums;

enum ProjectStatusEnum: string
{
    case CREATED = "created";
    case APPROVED = "approved";
    case DECLINED = "declined";
    case COMPLETED = "completed";
    case CLOSED = "closed";
    case DISABLED = "disabled";
    case REFUNDED = "refunded";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
