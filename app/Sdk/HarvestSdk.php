<?php

declare(strict_types=1);

namespace App\Sdk;

use App\Enums\StatusCodes;
use Illuminate\Http\Client\PendingRequest;

class HarvestSdk
{
    public function __construct(
        private readonly PendingRequest $client,
    ) {
    }

    /**
     * @return array
     *
     * @throws \Exception
     */
    public function getCurrentUser(): array
    {
        $response = $this->client->get('/users/me');
        if ($response->status() !== StatusCodes::HTTP_OK->value) {
            throw new \Exception('error when receiving person');
        }

        return $response->json();
    }
}
