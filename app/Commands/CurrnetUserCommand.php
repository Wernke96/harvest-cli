<?php

namespace App\Commands;

use App\Exceptions\HarvestException;
use App\Models\HarvestUser;
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
            $harvestUser = new HarvestUser(...$results);
            foreach ($harvestUser->toArray() as $key => $value) {
                if(is_bool($value)){
                    $value = (int)$value;
                }
                $this->line("<fg=green>{$key}</>: <fg=blue>{$value} </>");
            }
        } catch (HarvestException $e) {
            $this->error($e->getMessage());
            return 1;
        }

        return 0;
    }
}
