<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index(){

        return view('/inprocess');
    }
    public function add(Request $request){
      $this->validate($request, [
        'departing-time'=>'required',
        'arriving-time'=>'required',
        'price'=>'required'
      ]);
      $schedule = new Schedule([
        'departing_time' => $request->get('departing-time'),
        'arriving_time' => $request->get('arriving-time'),
        'price' => $request->get('price'),
        'available_date' => $request->get('date')
      ]);
      $schedule->save();
      return redirect('/InProcess');
    }
    public function show(){
      $schedules = DB::table('schedules')->get();
      return view('/schedule', compact('schedules'));
    }
}
