<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class CollectorRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        $materials = Material::all();
        return view('collector-register',['materials'=>$materials]);
    }
}
