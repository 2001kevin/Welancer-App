<?php

namespace App\Http\Controllers;

use App\Events\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function sendMessage(Request $request){
        $message = [
            'id' => $request->userid,
            'sourceUserId' => Auth::user()->id,
            'name' => Auth::user()->name,
            'message' => $request->message,
        ];

        event(new ChatMessage($message));

        return 'true';
    }

    public function chatPage(){
        $data['title'] = 'Chat';
        $users = DB::table('users')->where('role', '=', 'User')->get();

        return view('chat',$data, compact('users'));
    }
}
