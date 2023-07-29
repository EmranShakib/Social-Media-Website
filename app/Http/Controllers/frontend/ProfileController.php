<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class ProfileController extends Controller
{
    public function index()
    {
        return view('frontend.profile.index');
    }
    
    public function update(Request $request, $id)
    {

        
         $request->validate([
            'name'=>'required|string|',
            'email'=>'required|string|email', 
             
         ]);
          
           if($request->hasFile('profile'))
           {
               $profileImage=$request->file('profile');
               $profileImageName=$profileImage->getClientOriginalName();
               $profileImage->storeAs('public/image/profiles',$profileImageName);

           }

           $profileUpdate=User::find($id);

            $profileUpdate->name=$request->input('name');
            $profileUpdate->email=$request->input('email');
            $profileUpdate->date_of_birth=$request->input('date_of_birth');
            $profileUpdate->profile_image=$profileImageName?? $profileUpdate->profile_image;
            


            $profileUpdate->save();

            return redirect()->back()->with('success','Profile updated succcessfully');


    }
}
