<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function loadSendSmsView()
    {
        return view('sms.send_sms.send-sms');
    }

    public function sendSms(Request $request)
    {
        //dd($request->all());
        $basic  = new \Vonage\Client\Credentials\Basic("02e8f46f", "z4yKtxLt77yeaFu7");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("8801721253636", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            return redirect()->route('dashboard')->with('success', "The message was sent successfully\n");

        } else {
            return redirect()->back()->with('dismiss', "The message failed with status: " . $message->getStatus() . "\n");
        }
    }
}
