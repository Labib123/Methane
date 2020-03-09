<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Submission;

class SubmissionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recycledBy(Request $request )
    {
        //Show all submcissions from the database and return to view
        $submission = Submission::where('recycledBy' , $request->get('id'))->get()  ;
        return view('show-submission',['submission'=>$submission]);
    }
    public function submittedBy(Request $request )
    {
        //Show all submcissions from the database and return to view
        $submission = Submission::where('submittedBy' , $request->get('id'))->get()  ;
        return view('show-submission',['submission'=>$submission]);
    }

    public function admin(Request $request )
    {
        //Show all submcissions from the database and return to view
        $submission = Submission::all() ;
        return view('admin-submission',['submission'=>$submission]);
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create submcission
        return view('create-submission');
    }
    /**
     * Store a newly created submcission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the employee in the database
        //form data is available in the request object
        $submission = new Submission();
        //input method is used to get the value of input with its
        //name specified
        $submission->proposedDate = $request->input('proposedDate');
        $submission->actualDate = $request->input('actualDate');
        $submission->weightInKg = $request->input('weightInKg');
        $submission->pointsAwarded = $request->input('pointsAwarded');
        $submission->status = $request->input('status');

        $submission->save(); //persist the data
        return redirect()->route('submission.index')->with('info','Submission Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}