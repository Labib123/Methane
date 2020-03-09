<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Material;
use DB  ;


use App\User;

class makeAppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('type:recycler');
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
        $collector = User::all()->where("materialType" , $request->get('id')) ;
            //
        return view('show-collectors',['collectors'=>$collector]);

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