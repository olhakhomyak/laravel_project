<?php

namespace App\Services;

use App\Entities\Feedback;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public function sendEmail(Feedback $feedback) 
    {
        Mail::send('pages.email', [
            'feedback' => $feedback
        ], function ($m) use ($feedback) {
            $m->from('user@mail.com');
            $m->to($feedback->email);
        });
    }
}