<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($name)
    {
        $message = Message::All()->where('name',$name)->sortByDesc('created_at');
        return view('message',compact('message'));
    }
    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->from_id = $request->Auth::user()->id;;
        $message->to_id = $request->toId;
        $message->content = $request->content;
        $message->read_at = $request->readAt;
        $message->save();

        return 'Message bulan ini berhasil ditambahkan!';
    }
}
