<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function indexWork(){
        $data['title'] = 'Dashboard';
        return view('admin.work.index', $data);
    }
}
