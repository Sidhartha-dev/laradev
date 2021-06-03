<?php

namespace App\Mail;

use App\Point;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Pointadded extends Mailable
{
    use Queueable, SerializesModels;
    public $point;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Point $point)
    {
        $this->point = $point;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->point->recieving_email, $this->point->name)
        ->bcc('another@another.com')
        ->subject('jenuil')
        ->markdown('emails.pointupdate');
    }
}
