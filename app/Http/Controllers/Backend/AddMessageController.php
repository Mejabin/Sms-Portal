<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AddMessageController extends Controller
{
    public function addMessageForm(Request $request)
    {
        return view("Backend.AddMesage.addMessage");
    }

    public function PostMessage(Request $request)
    {
        // Get the message from the request
        $messageType = $request->message_type;
        $message = $request->message;

        // Calculate the word count
        $wordCount = str_word_count($message);

        // Create a new Message instance
        $newMessage = new Message();
        $newMessage->message_type = $messageType;
        $newMessage->message = $message;
        $newMessage->word_count = $wordCount; // Save the word count

        // Save the message
        $newMessage->save();

        return redirect()->back()->with('success', 'Message added successfully. Word count: ' . $wordCount);
    }
}
