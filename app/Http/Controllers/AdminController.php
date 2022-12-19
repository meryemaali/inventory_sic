<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'Vous êtes bien déconnecté',
            'alert-type' => 'success'
        );


        return redirect('/login')->with($notification);
    } //end method

    public function Profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));


    }//end method

    public function EditProfile(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit',compact('editData'));


    }//end method

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->matricule = $request->matricule;
        $data->username = $request->username;
        $data->email = $request->email;
        
        $data->save();

        $notification = array(
            'message' => 'Profil Admin mis à jours avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);


    }//end method

    public function ChangePassword(){
        
        return view('admin.admin_change_password');

    }//end method

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message','Mot de passe modifié');
            return redirect()->back();
        } else{
            session()->flash('message','Acien mot de passe erroné');
            return redirect()->back();
        }

    }//end method

}
