<?php

declare(strict_types=1);

namespace App\Models;

class HarvestUser
{
    public function __construct(
        public readonly int    $id,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $email,
        public readonly string $telephone,
        public readonly string $timezone,
        public readonly int    $weekly_capacity,
        public readonly bool   $has_access_to_all_future_projects,
        public readonly bool   $is_contractor,
        public readonly bool   $is_admin,
        public readonly bool   $is_project_manager,
        public readonly bool   $can_create_projects,
        public readonly bool   $can_create_invoices,
        public readonly bool   $can_close_account,
        public readonly bool   $is_active,
        public readonly bool   $calendar_integration_enabled,
        public readonly string $calendar_integration_source,
        public readonly string $created_at,
        public readonly string $updated_at,
        public readonly bool   $can_see_rates,
        public readonly array  $roles,
        public readonly array  $permissions_claims,
        public readonly string $avatar_url,
    )
    {}

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'timezone' => $this->timezone,
            'weekly_capacity' => $this->weekly_capacity,
            'has_access_to_all_future_projects' => $this->has_access_to_all_future_projects,
            'is_contractor' => $this->is_contractor,
            'is_admin' => $this->is_admin,
            'is_project_manager' => $this->is_project_manager,
            'can_create_projects' => $this->can_create_projects,
            'can_create_invoices' => $this->can_create_invoices,
            'can_close_account' => $this->can_close_account,
            'is_active' => $this->is_active,
            'calendar_integration_enabled' => $this->calendar_integration_source,
            'calendar_integration_source' => $this->calendar_integration_source,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'can_see_rates' => $this->can_see_rates,
            'roles' => implode(', ', $this->roles),
            'permissions_claims' => implode(', ', $this->permissions_claims),
            'avatar_url' => $this->avatar_url,
        ];
    }
}
