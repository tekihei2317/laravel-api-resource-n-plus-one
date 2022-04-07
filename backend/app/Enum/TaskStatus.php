<?php

declare(strict_types=1);

namespace App\Enum;

enum TaskStatus: int
{
    case OPEN = 1;
    case PENDING = 2;
    case IN_PROGRESS = 3;
    case IN_REVIEW = 4;
    case CLOSED = 5;
}
