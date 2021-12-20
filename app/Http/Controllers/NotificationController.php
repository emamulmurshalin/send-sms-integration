<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function loadSendSmsView()
    {
        return view('sms.send_sms.send-sms');
    }
}
