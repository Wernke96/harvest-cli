<?php

namespace App\Commands;

use App\Sdk\HarvestSdk;
use LaravelZero\Framework\Commands\Command;

class CurrnetUserCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'get:user';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Get Current Cli User Info';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(HarvestSdk $harvestSdk): int
    {
        try {
            $results = $harvestSdk->getCurrentUser();
            dd($results);
        } catch (\Exception $e) {
            $this->info($e->getMessage());
        }

        return 1;
    }
}
