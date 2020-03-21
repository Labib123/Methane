<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Material;
use App\Schedule;
use App\CollectorMaterials;
use App\Submission;


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
    public function proposedDate(Request $request)
{
    
    $collectors = User::find($request->id) ; 
    $schedule = Schedule::all(); 
    return view('proposed-date',['collectors'=>$collectors,'schedule'=>$schedule]);
// dd($request->id);

}

public function makeAppoinment(Request $request)
{

    $submission = new Submission();
    $submission->proposedDate = $request->proposedDate;
    $submission->actualDate = 'NOT SET';
    $submission->weightInKg = 'NOT SET';
    $submission->pointsAwarded = 'NOT SET';
    $submission->status = 'Proposed';
    
    $submission->recycledBy = auth()->user()->username;
    $submission->submittedBy = 'NOT SET';
    $submission->user_id = auth()->user()->id;
    $submission->save() ;
    return redirect('home')->with('message', 'Appointment Created!');;


}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}