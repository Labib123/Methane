<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class CollectorRegistrationController extends Controller
{
    public function __construct()
    {
    }
    public function index(){
        $materials = Material::all();
        return view('register',['materials'=>$materials]);
    }
}
