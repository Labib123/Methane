<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use AuthenticatesUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'fullname' => 'required',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'totalpoints' => 0,
            'ecolevel' => 'Newbie',
            'address' =>  isset($data['address'])?$data['address']:'null' ,
            'schedule' => isset($data['schedule'])?$data['schedule']:'null',
            'usertype' => $data['usertype'],
            'materialType' => isset($data['materialType'])?$data['materialType']:'null',
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isAdmin' =>  !isset($data['address'])?false:true ,

        ]);
        return redirect('home')->with('message', 'User registered!');;
    }
    
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }
    
}
 