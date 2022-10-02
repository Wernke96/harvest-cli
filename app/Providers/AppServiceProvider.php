<?php

namespace App\Providers;

use App\Sdk\HarvestSdk;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(HarvestSdk::class, function () {
            $harvestToken = env('HARVEST_TOKEN');
            $accountId = env('HARVEST_ACCOUNT');
            $client = Http::baseUrl('https://api.harvestapp.com/v2')->withHeaders([
                'Harvest-Account-Id' => $accountId,
            ])->withToken($harvestToken);

            return new HarvestSdk($client);
        });
    }
}
