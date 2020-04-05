<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Material;
use App\Schedule;
use App\CollectorMaterials;
use App\Submission;
use Carbon\Carbon; 
use Auth; 
use DataTables;



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
    public function submission()
    {

       
        //Show all Materials from the database and return to view
        $submission = Submission::where('userID',auth()->user()->id);
        $material = Material::all();
        $schedule = Schedule::all(); 

        $collectors = User::all(); 

        return view('show-collectors',['schedule'=>$schedule,'submission'=>$submission,'material'=>$material,'collectors'=>$collectors]);
    }
<<<<<<< HEAD
    


    public function viewappointments()
    {
        //Show all Materials from the database and return to view
    $users = User::all();  
        
    $submissions = Submission::where('recycledBy',auth()->user()->username)->where('status','Proposed')->get(); 

        return view('viewappointments',['submissions'=>$submissions,'users'=>$users]);
    }
=======

>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8

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
        $materialType = $request->name ; 
            //
        return view('show-collectors',['material'=>$material, 'collectors'=>$collectors,'schedule'=>$schedule,'materialType'=>$materialType]);

    }
    public function proposedDate(Request $request)
{
    $materialType = $request->materialType ; 
    $collectors = User::find($request->id) ;
    $users = User::all();  
    $schedule = Schedule::all(); 
    $submissions = Submission::where('recycledBy',auth()->user()->username)->where('status','Proposed')->get(); 

    return view('proposed-date',['users'=>$users,'submissions'=>$submissions,'collectors'=>$collectors,'schedule'=>$schedule,'materialType' => $materialType]);


}

public function makeAppoinment(Request $request)
{
    $sMaterial =  Material::where('name',$request->materialType)->first();

    $submission = new Submission();
    $submission->proposedDate = $request->proposedDate;
    $submission->actualDate = 'NOT SET';
    $submission->weightInKg = 'NOT SET';
    $submission->pointsAwarded = 'NOT SET';
    $submission->status = 'Proposed';
    $submission->materialType = 'Proposed';
    
    $submission->materialType = $sMaterial->name; 

    $submission->recycledBy = auth()->user()->username;
    $submission->submittedBy = 'NOT SET';
    $submission->user_id = $request->toBeCollector;
    $submission->save() ;
    return redirect('/')->with('message', 'Appointment Created!');;

    // dd($request->toBeCollector);

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function showRecyclersAPI(Request $request){
        if ($request->ajax()) {
            $data = Submission::where('user_id',auth()->user()->id)->where('status','Proposed')->get();
            return Datatables::of($data)
            ->make(true);
            }
            }
   public function showRecyclers(Request $request){
       
    
        $submissions = Submission::where([['user_id',auth()->user()->id],['status','proposed']]);

       return view('collector-submission',['submissions'=>$submissions]);
    }
   
    public function enterWeight(Request $request)
    {
        // dd($request->id);

        $id = $request->id  ;
        $materials = Material::all() ;
        return view('enter-date',['materials'=>$materials, 'id'=>$id]);

    }

    public function manually(Request $request)
    {
        // dd($request->id);
        $materials = Material::all() ; 
        return view('manually-appointment',['materials'=>$materials]);

    }
    public function manuallyAPI(Request $request)
    {
            //Persist the employee in the database
            //form data is available in the request object
            $submission = new Submission();
         $mytime = Carbon::now();
         $materialType = Material::where('id',$request->input('materialType'))->first();


            //input method is used to get the value of input with its
            //name specified
            $submission->proposedDate = $mytime->toDateString();
            $submission->actualDate = $mytime->toDateString();
            $submission->weightInKg = $request->input('weightInKg');
            $submission->user_id = auth()->user()->id;


            $submission->materialType = $request->input('materialType') ; 
            $submission->pointsAwarded = $materialType->pointsPerKg * $request->input('weightInKg');
            $submission->recycledBy = $request->input('recycledBy');
            $submission->submittedBy = auth()->user()->username;


            $submission->status = "submitted";
    
            $submission->save(); //persist the data
            return redirect('/')->with('message','Submission Added Successfully');

    }
    public function recordSubmission(Request $request)
    {
         $mytime = Carbon::now();
         $record = Submission::find($request->id);
         $materialType = Material::where('name',$record->materialType)->first();
         
         $record->actualDate = $mytime->toDateString();
         $record->weightInKg = $request->weight;
         $record->submittedBy = auth()->user()->username;
<<<<<<< HEAD
         $record->materialType =   $request->materialType; 
         $record->pointsAwarded = $materialType->pointsPerKg * $request->weight ; 
=======
         $record->pointsAwarded = $materialType->pointsPerKg * $request->weight ; 
         $record->materialType =   $request->materialType; 
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
        $record->status = "submitted";
        // dd($record->pointsAwarded );
        
        $collector =  User::where('username',$record->submittedBy)->first();
        $recycler =  User::where('username',$record->recycledBy)->first();

        $collector->totalpoints = $collector->totalpoints+ $record->pointsAwarded ; 
        $recycler->totalpoints = $recycler->totalpoints+ $record->pointsAwarded ; 
<<<<<<< HEAD
        dd($collector->totalpoints);
=======
        
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
        $collector->save() ; 
        $recycler->save() ; 

        $record->save(); 
        if($recycler->totalpoints  > 100 && $recycler->totalPoints  < 500  ){
            $recycler->ecolevel = 'eco-saver' ; 
        }
        if($recycler->totalpoints  >500 &&$recycler->totalPoints  < 1000  ){
            $recycler->ecolevel = 'eco-hero' ; 
        }
         if($recycler->totalpoints  > 1000  ){
            $recycler->ecolevel = 'Eco-Warrior';
        }
        $recycler->save() ;   
         return redirect('/')->with('message', 'Submission recorded!');;

    //   dd($request->weight);
    }
}