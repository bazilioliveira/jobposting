<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function edit() {
        $user = Auth::user();
        return view('edit-user', compact('user'));
    }

    public function profileupdate(Request $request) {
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->city = $request->get('city');
        $user->skills = $request->get('skills');
        $user->education = $request->get('education');
        $user->experience = $request->get('experience');

        $user->save();

        return redirect('profile');
    }


    public function createForm(){
        return view('profile');
    }

    public function fileUpload(Request $req)
    {
        $req->validate([
            'file' => 'required|max:2048'
        ]);    

        $fileModel = new File;

            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();

                return back()
                    ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
        }
    }
}
