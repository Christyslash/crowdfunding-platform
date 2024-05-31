<?php

namespace App\Enums;

enum ProjectPaymentStatusEnum: string
{
    case CREATED = "created";
    case PROCESSING = "processing";
    case APPROVED = "approved";
    case DECLINED = "declined";
    case SUCCEED = "succeed";
    case FAILED = "failed";
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
