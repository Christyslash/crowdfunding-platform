<?php

namespace App\Enums;

enum ProjectCommentStatusEnum: string
{
    case CREATED = "created";
    case APPROVED = "approved";
    case DECLINED = "declined";
    case CANCELLED = "cancelled";
    case DISABLED = "disabled";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
