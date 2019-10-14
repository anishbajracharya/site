<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailForContactUs extends Mailable
{
    use Queueable, SerializesModels;
    public $text;
    public $email;
    public $phone;
    public $subject;
    public $message1;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text,$email,$phone,$subject,$message1)
    // public function __construct($mail_content)
    {
        $this->text = $text;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message1 = $message1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contactusmail');
    }
}