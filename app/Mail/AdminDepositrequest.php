<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminDepositrequest extends Mailable
{
    use Queueable, SerializesModels;
    public $amount;
    public $hash;
    public $username;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($amount,$hash,$username)
    {
        //
        $this->amount=$amount;
        $this->hash=$hash;
        $this->username=$username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $subject="Approve/Reject";
        return $this->markdown('emails.depositadmin')
        ->subject($subject)
        ->with(['username'=>$this->username,'hash'=>$this->hash,'amount'=>$this->amount]);
        
    }
}
