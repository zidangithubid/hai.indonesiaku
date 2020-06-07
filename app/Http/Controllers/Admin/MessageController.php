<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $msgs = Message::paginate(10);
        return view('pages.messages.index', compact('msgs'));
    }
}
