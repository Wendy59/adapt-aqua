<?php

namespace App\Http\Controllers\Mail;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function sendEmailContact(Request $request)
    {
        var_dump($request->all());die();
        Mail::send('emails.reminder', ['datas' => $request->all()], function ($m) use ($request) {
            $m->from($request->get('email'), 'Your Application');

            $m->to('wendy.norbert95@gmail.com', "TEST DEV")->subject('[SITE WEB] - Contact : '.$request->get('name'));
        });
    }
}
