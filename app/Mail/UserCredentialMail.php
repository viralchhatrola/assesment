<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCredentialMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Registered user email for sending in mail
     *
     * @var string
     */
    public $email;

    /**
     * Registered user password for sending in mail
     *
     * @var string
     */
    public $password;
    /**
     * Create a new message instance.
     *
     * @param string $email
     * @param string $password
     * @return void 
     */
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.userCredential', ['email' => $this->email, 'password' => $this->password]);
    }
}
