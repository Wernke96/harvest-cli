<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\Mocks\HarvestUserApiMock;
use Tests\TestCase;

class CurrentUserCommandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCurrentUserCommand(): void
    {
        $mockBody = (new HarvestUserApiMock())->success();
        Http::fakeSequence()->push($mockBody);
        $artisn = $this->artisan('get:user');
        foreach ($mockBody as $key => $value){
            if(is_array($value)){
                $value = $value[0];
            }
            if (is_bool($value)){
                $value = (string) $value;
            }
            $artisn->expectsOutputToContain("{$key}: {$value}");
        }
        $artisn->assertExitCode(0);
    }

    public function testCurrentUserCommandOnFailed(): void
    {
        Http::fakeSequence()->push([],500);
        $this->artisan('get:user')
            ->expectsOutput('error when receiving person info from harvest status_code:500')
            ->assertExitCode(1);
    }
}
