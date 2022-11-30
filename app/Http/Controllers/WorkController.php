<?php

namespace App\Http\Controllers;

use App\Models\freelance;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function pageWork(){
        $data['title'] = 'Find Work';
        return view('find-work', $data);
    }
    public function indexWork(){
        $data['title'] = 'Dashboard';
        $works = work::all();
        $freelancer = freelance::pluck('freelance_id','name');
        return view('admin.work.index', $data, compact('works','freelancer'));
    }

    public function createWork(){
        $data['title'] = 'Dashboard';
        $freelancer = freelance::pluck('freelance_id', 'name');
        return view('admin.work.create', $data, compact('freelancer'));
    }

    public function storeWork(Request $request){
        $request->validate([
            'project_name' => 'required',
            'freelance_id' => 'required',
            'project_description' => 'required',
            'client_review' => 'required',
            'photo' => 'required|image',
        ]);

        $photoName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('photos'), $photoName);

        work::create([
            'freelance_id' => $request->freelance_id,
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'client_name' => $request->client_name,
            'client_review' => $request->client_review,
            'photo' => $photoName,
        ]);

        return redirect('admin/work');
    }

    public function updateWork(Request $request, work $work){
        $request->validate([
            'project_name' => 'required',
            'freelance_id' => 'required',
            'project_description' => 'required',
            'client_review' => 'required',
            'photo' => 'image',
        ]);

        if($request->hasFile('photo')){
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
            
            work::where('work_id', $work->work_id)->update([
                'project_name' => $request->project_name,
                'freelance_id' => $request->freelance_id,
                'project_description' => $request->project_description,
                'client_review' => $request->client_review,
                'client_name' => $request->client_name,
                'photo' => $photoName,
            ]);
        }else{
            work::where('work_id', $work->work_id)->update([
                'project_name' => $request->project_name,
                'freelance_id' => $request->freelance_id,
                'project_description' => $request->project_description,
                'client_review' => $request->client_review,
                'client_name' => $request->client_name,
            ]);
        }
        return back();
    }

    public function deleteWork(work $work){
        DB::table('works')->where('work_id', $work->work_id)->delete();
        return back();
    }
}
