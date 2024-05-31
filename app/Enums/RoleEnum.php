<?php

namespace App\Enums;

enum RoleEnum: string
{
    case SUPER_ADMIN = "super_admin";
    case ADMIN = "admin";
    case USER = "user";

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function adminRoles(): array
    {
        return [
            self::SUPER_ADMIN,
            self::ADMIN,
        ];
    }
}
