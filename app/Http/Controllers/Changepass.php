<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class Changepass extends Controller
{
    //
    public function Ch_password(){
        return view('admin.body.change_pass');
    }

    public function update_pass(Request $request){
//Validation part 
        $validateData = $request->validate([
            'old_pass'=> 'required',
            'password' => 'required|confirmed'
         
        ]);
    //password save part 
        $hashedPassword =Auth::user()->password;
        //if else start 
        if(Hash::check($request->old_pass,$hashedPassword)){

            $user =User::find(Auth::id());
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('success','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Invalid password entered ');

        }
        // if else end 

        
    }

    public function profile_update(){
        if(Auth::user()){
            $user= User::find(Auth::user()->id);
           if( $user){
            return view('admin.body.update',compact('user'));

           }
        }

    }

    // update detail 

    public function update_profile(Request $request){

        $user =User::find(Auth::user()->id);
        if($user){
            $user->name=$request['name'];
            $user->email=$request['email'];
    //Image code 
            if($request->file('photo')){
                $file =$request->file('photo');
        @unlink(public_path('upload/user_image/'.$user->profile_photo_path));
                $filename = date('ymdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/user_image'),$filename);
                $user['profile_photo_path'] =$filename;
    
    
            }
            //end image code 
            $user->save();
            return redirect()->back()->with('success','Profile  updated Successfully');
            
        }else{}

        return redirect()->back();

    }
}
