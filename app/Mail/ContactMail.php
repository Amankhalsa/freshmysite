<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $content ; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content )
    {
        //
        $this->data = $content ;
      

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')
        ->from($this->data->email)
        ->subject('Your site visiter')
        ->with([
            'name' => $this->data->name,
            'email' => $this->data->email,
            'subject' => $this->data->subject,
            'content' => $this->data->message,


        ]);

    
    }
}

