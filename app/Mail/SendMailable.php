<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $text;
    public $email;
    public $phone_number;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text,$email,$phone_number)
    {
        $this->text = $text;
        $this->email = $email;
        $this->phone_number = $phone_number;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail');
    }
}