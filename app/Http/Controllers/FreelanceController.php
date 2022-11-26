<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    public function indexFreelance(){
        $data['title'] = 'Dashboard';
        return view('admin.freelancer.index', $data);
    }

    public function createFreelance(){
        $data['title'] = 'Dashboard';
        return view('admin.freelancer.create', $data);
    }
}
