<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Material;
use App\Schedule;
use App\CollectorMaterials;

use DB  ;


use App\User;

class makeAppointmentController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all Materials from the database and return to view
        $material = Material::all();
        return view('makeAppointment',['material'=>$material]);
    }

    public function selectCollector(Request $request)
    {
        //Show all Materials from the database and return to view
        $material = CollectorMaterials::where("name" , $request->name)->get() ;
        $collectors = User::all() ; 
        $schedule = Schedule::all(); 
            //
        return view('show-collectors',['material'=>$material, 'collectors'=>$collectors,'schedule'=>$schedule]);

    }
    public function proposedDate()
{
    
    return view('proposed-date');


}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}