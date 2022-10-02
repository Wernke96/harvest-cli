<?php

declare(strict_types=1);

namespace App\Models;

class HarvestUser
{
    public function __construct(
        public readonly int $id,
        public readonly string $first_name,
        public readonly string $last_name,

    ) {
    }
}
