<?php

namespace App\Http\Traits;

use Auth;
use Mail;

trait MailTrait
{
    public function sendVarificationCode($user)
    {
        $data = array("name" => $user->full_name, 'varification_code' => $user->varification_code);

        Mail::send(['html' => 'site::mail.send-verification-code'],  $data, function ($message) use ($user) {
            $message->to($user->email, $user->full_name)
                ->subject("Email Varification");
            $message->from('birenhl49@gmail.com', "Real State Team");
        });


    }
    public function contactMail($request)
    {
        $data = array("name" => $request->name, 'email' => $request->email, 'phone_number' => $request->phone_number, 'subject' => $request->subject, 'description' => $request->message);

        Mail::send(['html' => 'site::mail.contact-mail'],  $data, function ($message) use ($request) {
            $message->to($request->email, $request->name)
                ->subject("Query Request");
            $message->from('birenhl49@gmail.com', "Real State Team");
        });


    }

    public function subscriptionMail($request)
    {
        $data = array("email" => $request->subcription_email);

        Mail::send(['html' => 'site::mail.subscription-mail'],  $data, function ($message) use ($request) {
            $message->to($request->subcription_email, $request->subcription_email)
                ->subject("Subscription");
            $message->from('birenhl49@gmail.com', "Real State Team");
        });

    }

}
