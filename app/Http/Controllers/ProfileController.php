<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
use  App\Submission ; 

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        if(auth()->user()->usertype == 'recycler'){
        $submissionsNo  = Submission::where('recycledBy',auth()->user()->username)->count() ; 
    }
        else {
        $submissionsNo  = Submission::where('submittedBy',auth()->user()->username)->count() ; 
            
        }
        return view('profile.edit',['submissionsNo'=>$submissionsNo]);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
   
    
    public function update(Request $request)
    {
        //Retrieve the employee and update

        $this->validate($request,[
            'fullname' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $user = User::find($request->input('id'));
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->save(); //persist the data
        return redirect('profile')->with('info','Profile Updated Successfully');


    }

    
    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
    
    
     public function password(Request $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    
}
