<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
     public function __construct() {
        //
    }

    public function sample() {

        $data = [
            'recipient'     => 'Subhabrata Kundu',
            'mail_to'       => 'skundu.creative@gmail.com',
            'subject'       => 'Testing eMail ' . date("d/m/Y h:i:s"),
            'content'       => 'Hello Laravel',
            ];


        Mail::send(new SampleMail($data));

             // check for failed ones
        if (Mail::failures()) {
             return 'Something went wrong. Please try again later.';
            
        } else {

            return 'Email Sent with attachment. Check your inbox.';
        }
    }

}
