<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
protected $content ; 
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($content )
    {
        //
        $this->content  =$content ;

     
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        $email = new ContactMail( $this->content  );
        // Delivered to creted user 
     
                    Mail::to('amansin31@gmail.com')->send($email);
    }
}
