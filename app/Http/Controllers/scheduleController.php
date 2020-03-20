<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\User;
use DB;




class scheduleController extends Controller
{
    public function index(Request $data)
    {
        $schedule = new Schedule();
        $user =User::find($data['userID']);
        $schedule->user_id = isset($data['userID'])?$data['userID']:null;
        $schedule->Sun = isset($data['sunday'])?$data['sunday']:null;
        $schedule->Mon = isset($data['monday'])?$data['monday']:null;   
        $schedule->Tue = isset($data['tuesday'])?$data['tuesday']:null;
        $schedule->Wed = isset($data['wednesday'])?$data['wednesday']:null;
        $schedule->Thu = isset($data['thursday'])?$data['thursday']:null;
        $schedule->Fri = isset($data['friday'])?$data['friday']:null;
        $schedule->Sat = isset($data['saturday'])?$data['saturday']:null;
        $schedule->save();

        $user->schedule = $schedule->id;
        $user->save() ;
        return redirect()->route('welcome')->with('info','Materia Added Successfully');

        ; 
        // dd($data->all()); // This will dump and die
    }
}