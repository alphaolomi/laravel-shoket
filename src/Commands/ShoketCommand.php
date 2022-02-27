<?php

namespace Shoket\LaravelShoket\Commands;

use Illuminate\Console\Command;

/**
 * Class LaravelShoketCommand
 * @package Shoket\LaravelShoket\Commands
 */
class ShoketCommand extends Command
{
    public $signature = 'laravel-shoket';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
