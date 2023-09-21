<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;





    protected $email;


    /**
     * Create a new job instance.
     */
    public function __construct($mail)
    {
        $this->email = $mail;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            dump('send email demo...');
        }
        catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
    }
}