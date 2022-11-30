<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $data['title'] = 'Dashboard';
        return view('admin.dashboard', $data);
    }

    public function indexUser(){
        $data['title'] = 'Dashboard';
        $users = DB::table('users')->get();
        return view('admin.user.index', $data, compact('users'));
    }

    public function updateUser(Request $request, User $user){
        $request->validate([
            'role' => 'required'
        ]);

        User::where('user_id', $user->user_id)->update([
            'role' => $request->role,
        ]);

        return redirect('admin/user');
    }
}

