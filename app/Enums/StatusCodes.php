<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusCodes: int
{
    // 100
    case HTTP_CONTINUE = 100;
    case HTTP_SWITCHING_PROTOCOLS = 101;

    // 200
    case HTTP_OK = 200;
    case HTTP_CREATED = 201;
}
