<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCodeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$code)
    {
        $this->code=$code;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('SUBJECT')
                    ->view('email.send-code-change-password');
    }
}
