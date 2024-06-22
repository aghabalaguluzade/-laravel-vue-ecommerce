<?php

namespace App\Enums;

enum CustomerStatus: string
{
    case Actived = 'actived';
    case Disabled = 'disabled';
}