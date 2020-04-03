<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
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
