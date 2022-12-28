<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** a proprieda timeout refere-se a tempo máximo que consumidor pode
     * levar para realizar o trabalho. há  duas forma para declarar:
     * dentro classe ou via linha de comando
     * public $timeout = 1;
     * php artisan  queue:work --timeout=1
     **/

    #public $timeout = 10;

    #public int $tries = -1;
    #public int $backoff= 2;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws \Exception
     */
    public function handle()
    {
        #throw new \Exception("Failed");
        sleep(3);
        info('Hello!');
    }

  /*
    public function retryUntil()
    {
        return now()->addMinute();
    }*/

}
