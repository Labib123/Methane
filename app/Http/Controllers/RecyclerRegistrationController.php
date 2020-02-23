<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecyclerRegistrationController extends Controller
{
    function index(){
        return view('recycler-register');
    }
}
