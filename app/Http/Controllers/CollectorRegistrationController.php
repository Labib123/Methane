<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectorRegistrationController extends Controller
{
    public function index(){
        return view('collector-register');
    }
}
