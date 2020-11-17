<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CouponMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $coupon;

    public function __construct($coupon)
    {
        $this->coupon=$coupon;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data=$this->coupon;

        return  $this->from(Settings()->email)->view('Mail.coupon',compact('data'))
            ->subject('New Coupon !');
    }
}
