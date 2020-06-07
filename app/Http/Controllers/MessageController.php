<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $msg = new Message();
        $msg->name = $request->sender;
        $msg->email = $request->email;
        $msg->subject = $request->subject;
        $msg->description = $request->description;
        $msg->save();

        return response()->json([
            'success' => true,
            'data' => $msg,
        ]);
    }
}
