<?php

namespace Shoket\Laravel\Commands;

use Illuminate\Console\Command;
use Shoket\Laravel\Facades\Shoket;


/**
 * Class VerifyPayment
 * @package Shoket\Laravel\Commands
 */
class VerifyPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'shoket:verify-payment {--reference= : Reference ID from Shoket Payement Request} {--provider_name= : Provider Name to verify with eg "Vodacom"}  {--provider_code= : Provider Code to verify with eg "MPESA"}  provider_name {--log=false : Whether to log responses }';


    /**
     *
     * @var string
     */
    public $description = 'Verify transactions after payments using Shoket verify API';

    public function handle(): int
    {
        $this->comment('Work in progess');

        // $referenceId = $this->option('reference');
        // $provider_name = $this->option('provider-code');
        // $provider_code = $this->option('provider-code');
        // // $isLogging = $this->option('log');

        // try {
        //     Shoket::verifyPaymentRequest($referenceId, [
        //         "provider_name" => $provider_name,
        //         "provider_code" => $provider_code
        //     ]);
        // } catch (\Throwable $th) {
        //     throw $th;
        // }


        return self::SUCCESS;
    }
}
