<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['title'] = 'Dashboard';
        return view('chat', $data);
    }

    public function fetchMessage(){
        return message::with('user')->get();
    }

    public function sendMessage(Request $request){
        $user = Auth::user();

        $message = $user->messages->create([
            'text' => $request->input('chat')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Send!'];
    }
}
