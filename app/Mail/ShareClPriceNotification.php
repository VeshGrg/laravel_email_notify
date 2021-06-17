<?php

namespace App\Mail;

use App\Models\Dailytransaction;
use App\Models\Share;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShareClPriceNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $dailytransaction;

    public function __construct(Dailytransaction $dailytransaction)
    {
        $this->dailytransaction = $dailytransaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.price_notify')
            ->with([
                'share' => 'himal',
                'amt' => '200'
            ]);
    }
}
