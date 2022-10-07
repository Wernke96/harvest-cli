<?php

declare(strict_types=1);


namespace Tests\Mocks;


use Carbon\Carbon;
use Faker\Generator;

/**
 * @property-read Generator $faker
 */
class HarvestUserApiMock extends BaseMock
{

    public function success(): array
    {
        return [
                'id' => $this->faker->numberBetween(),
                'first_name' => $this->faker->firstName,
                'last_name' => $this->faker->lastName,
                'email' => $this->faker->email,
                'telephone' => $this->faker->phoneNumber,
                'timezone' => $this->faker->timezone,
                'weekly_capacity' => $this->faker->numberBetween(0,20000),
                'has_access_to_all_future_projects' => $this->faker->boolean,
                'is_contractor' => $this->faker->boolean,
                'is_admin' => $this->faker->boolean,
                'is_project_manager' => $this->faker->boolean,
                'can_create_projects' => $this->faker->boolean,
                'can_create_invoices' => $this->faker->boolean,
                'can_close_account' => $this->faker->boolean,
                'is_active' => $this->faker->boolean,
                'calendar_integration_enabled' => false,
                'calendar_integration_source' => $this->faker->boolean,
                'created_at' => Carbon::today()->toString(),
                'updated_at' => Carbon::today()->toString(),
                'can_see_rates' => $this->faker->boolean,
                'roles' =>  ['admin','client'],
                'permissions_claims' =>['expenses:read:own', 'expenses:write:own', 'timers:read:own', 'timers:write:own'],
                'avatar_url' => $this->faker->imageUrl,

        ];
    }
}
