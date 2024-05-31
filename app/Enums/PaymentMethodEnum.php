<?php

namespace App\Enums;

enum PaymentMethodEnum: string
{
    case STRIPE = "stripe";
    case KKIAPAY = "kkiapay";
    case CRYPTO = "crypto";
    case MONEROO = "moneroo";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
