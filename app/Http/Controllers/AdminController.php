<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $data['title'] = 'Dashboard';
        // $works = DB::table('works')->get();
        // $freelancers = DB::table('freelances')->get();
        // $worksCount = DB::table('works')->count();
        $usersCount = DB::table('users')->count();
        // $freelancersCount = DB::table('freelances')->count();       
        return view('admin.dashboard', $data, 
            compact(
                'usersCount', 
                // 'worksCount', 
                // 'freelancersCount',
                // 'works',
                // 'freelancers'
            ));
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

