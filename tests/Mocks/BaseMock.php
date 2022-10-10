<?php

declare(strict_types=1);

namespace Tests\Mocks;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Client\Factory;

abstract class BaseMock
{
    use WithFaker;

    public function __construct()
    {
        $this->setUpFaker();
    }
}
