<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecyclerRegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest'); 
    }
    function index(){
        return view('recycler-register');
    }
    
}
