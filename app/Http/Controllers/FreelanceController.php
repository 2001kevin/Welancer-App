<?php

namespace App\Http\Controllers;

use App\Models\freelance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FreelanceController extends Controller
{
    public function indexFreelance(){
        $data['title'] = 'Dashboard';
        $freelancers = freelance::all();
        return view('admin.freelancer.index', $data, compact('freelancers'));
    }

    public function createFreelance(){
        $data['title'] = 'Dashboard';
        return view('admin.freelancer.create', $data);
    }

    public function storeFreelance(Request $request){
        $request->validate([
            'name' => 'required',
            'cattegory' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'email' => 'required|email:rfc,dns',
            'linkedin' => 'required',
            'instagram' => 'required',
            'photo' => 'required|image',
        ]);
        
        $photoName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('photos'), $photoName);

        $user_id = Auth()->user()->user_id;

        freelance::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'cattegory' => $request->cattegory,
            'description' => $request->description,
            'experience' => $request->experience,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'photo' => $photoName,
        ]);
        dd($request->all());
        return redirect('admin/dashboard/freelancer');
    }

    public function updateFreelance(Request $request, $id){
        
        // return $id;
        $request->validate([
            'name' => 'required',
            'cattegory' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'email' => 'required|email:rfc,dns',
            'linkedin' => 'required',
            'instagram' => 'required',
            'photo' => 'image',
        ]);

        if($request->hasFile('photo')){
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
            
            freelance::where('freelance_id', $id)->update([
                'name' => $request->name,
                'cattegory' => $request->cattegory,
                'description' => $request->description,
                'experience' => $request->experience,
                'email' => $request->email,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'photo' => $photoName,
            ]);
        }else{

            // $user_id = Auth()->user()->user_id;
             freelance::where('freelance_id', $id)->update([
                'name' => $request->name,
                'cattegory' => $request->cattegory,
                'description' => $request->description,
                'experience' => $request->experience,
                'email' => $request->email,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
            ]);
        }
        return redirect('admin/dashboard/freelancer');
    }

    public function deleteFreelance(freelance $freelance){
        DB::table('freelances')->where('freelance_id', $freelance->freelance_id)->delete();
        return redirect('/admin/dashboard/freelancer');
    }

    public function findFreelance(Request $request){
        $data['title'] = 'Find Freelance';
        $keyword = $request->keyword;
        $freelancers = freelance::where('name', 'LIKE', '%' . $keyword. '%')->paginate(5);
        return view('find-freelancer', $data, compact('freelancers'));
    }

    public function indexFindFreelance(){
        $freelancers = DB::table('freelances')->get();
        $data['title'] = 'Find Freelance';
        return view('find-freelancer',$data, compact('freelancers'));
    }
}
