<?php

namespace App\Enums;

enum PayoutStatusEnum: string
{
    case CREATED = "created";
    case CANCELLED = "cancelled";
    case PROCESSING = "processing";
    case APPROVED = "approved";
    case DECLINED = "declined";
    case SUCCEED = "succeed";
    case FAILED = "failed";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
