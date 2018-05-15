<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Events;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
class evencontroller extends Controller
{
     public function event(){

        return view('Event');
    }



  /*  public function index(){
    	$events = Events::get();
    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list); 
 
        return view('events', compact('calendar_details') );
    }


     public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
 
        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('login/events')->withInput()->withErrors($validator);
        }
 
        $event = new Events;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->save();
 
        \Session::flash('success','Event added successfully.');
        return redirect::to('login/events');
    }


    public function calendar(){
        return view('calandar');
    }*/



     public function store(request $request){



      // print_r($request->input());

        $event_name=$request->input('event_name');
       // $password=$request->input('password');

       // $name=$request->input('name');


    echo    DB::insert('insert into users (id,name,email,password) values (?,?,?,?)',[null,$event_name]);
}
}
