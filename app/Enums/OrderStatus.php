<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Unpaid = 'unpaid';
    case Paid = 'paid';
    case Cancelled = 'cancelled';
    case Shipping = 'shipped';
    case Completed = 'completed';

    public static function getStatuses()
    {
        return [
            self::Paid,
            self::Unpaid,
            self::Cancelled,
            self::Shipping,
            self::Completed
        ];
    }
}