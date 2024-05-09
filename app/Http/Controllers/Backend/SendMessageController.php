<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        return view("Backend.SendMessage.SendMessage");
    }

}
