<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function destroy(Request $request){
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
    }

    public function Profile(){
            $id = Auth::user()->id;
            $adminData = User::find($id);
            return view('admin.admin_profile_view', compact('adminData'));
    }

    public function EditProfile(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;

        if($request->file('profile_image')){
                $file = $request->file('profile_image');
                $fileName = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('profile-upload/admin_images'), $fileName);
                $data['profile_image'] = $fileName;
        }

        $data->save();

        return redirect()->route('admin.profile');
    }


    public function UploadProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        if($request->file('profile_image')){
            $file = $request->file('profile_image');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('profile-upload/admin_images'), $fileName);
            $data['profile_image'] = $fileName;
    }

    $data->save();
    return redirect()->route('upload');
    }
}
