<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\CollectorMaterials;
use Illuminate\Validation\Rule;

use App\User;
use DB;




class CollectorMaterialsController extends Controller
{
    public function index()
    {
        // Show all Materials from the database and return to view
        $CollectorMaterials = CollectorMaterials::where('user_id',auth()->user()->id)->get();
        $material = Material::all();
        return view('collector-show-materials',['materials'=>$material,'CollectorMaterials'=>$CollectorMaterials]);
   
        // dd(auth()->user()->id);
             }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => Rule::unique('collector_materials')->where('user_id', auth()->user()->id ),
        ]);
   
        $material = Material::where('name',$request->name)->first();
        $collectorMaterial = new CollectorMaterials() ;
         $collectorMaterial->user_id = auth()->user()->id ; 
          $collectorMaterial->name =$material->name  ; 
         $collectorMaterial->description =$material->description  ; 
           $collectorMaterial->pointsPerKg =$material->pointsPerKg  ; 
         $collectorMaterial->save(); 
      return redirect('/collectorMaterials')->with('info','Material Added Successfully');

    }
}