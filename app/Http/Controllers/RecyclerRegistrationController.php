<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecyclerRegistrationController extends Controller
{

    public function __construct()
    {
    }
    function index(){
        return view('recycler-register');
    }
    
}
