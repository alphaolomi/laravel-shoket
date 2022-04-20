<?php

namespace Shoket\Laravel\Commands;

use Illuminate\Console\Command;
use Shoket\Laravel\Facades\Shoket;

/**
 * Class AcceptPayment
 * @package Shoket\Laravel\Commands
 */
class AcceptPayment extends Command
{
    public $signature = 'shoket:accept-payment {--log=}';

    public $description = 'Charge your customer direct from your web or app.';

    public function handle(): int
    {
        $this->comment('Work in progress');

        return self::SUCCESS;
    }
}
