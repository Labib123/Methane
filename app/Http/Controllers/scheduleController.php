<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use DB;




class scheduleController extends Controller
{
    public function index(Request $data)
    {
        $schedule = new Schedule();
        $latest = DB::table('users')->select(DB::raw('max(id) '))->value('id') +1 ; ;

        // $schedule->user_id = $latest;
        // $schedule->Sun = isset($data['sun'])?$data['sun']:'null';
        // $schedule->Mon = isset($data['mon'])?$data['mon']:'null';
        // $schedule->Tue = isset($data['tue'])?$data['tue']:'null';
        // $schedule->Wed = isset($data['wed'])?$data['wed']:'null';
        // $schedule->Thu = isset($data['thu'])?$data['thu']:'null';
        // $schedule->Fri = isset($data['fri'])?$data['fri']:'null';
        // $schedule->Sat = isset($data['sat'])?$data['sat']:'null';
        // $schedule->save();
        dd($data->all()); // This will dump and die
    }
}