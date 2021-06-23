<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    private $orderUrl;
    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->orderUrl  = 'https://skundu.in/';
        $this->data       = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->markdown('emails.SampleMail', [
                            // 'url' => $this->orderUrl,
                            'data'=> $this->data["content"],
                        ])
                        ->to($this->data["mail_to"], $this->data["recipient"])
                        ->subject($this->data["subject"])


                        //->from('example@domainname.com', 'Mr. Laravel')
                        ->from(env('MAIL_FROM_ADDRESS', 'email@example.com'), env('MAIL_FROM_NAME', 'Mr. Laravel'))
                        ->cc('cc_email@example.com', 'Mr. Example')
                        ->bcc('bcc_email@example.com', 'BCC')
                        ->replyTo('noreply@example.com', 'No Reply')
                        ->attach(public_path("attachments/attachment.txt"))
                        ;


        // check for failed ones
        if (Mail::failures()) {
             return 'Something went wrong. Please try again later.';
            //return new Error(Mail::failures()); 
        }

        // else do redirect back to normal
        return 'Email Sent with attachment. Check your inbox.';
        // return public_path("attachment.txt");



    }
}
