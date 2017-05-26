<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function index()
	{
		$events = Time::orderBy('date', 'ASC')->get();
		$dates = DB::table('time')
		            ->select('date')
		            ->groupBy('date')
		            ->get();
		//return $dates;
		return View::make('site.home')
					->with('events',$events)
					->with('dates',$dates)
					->with('title','IPvision SUST 6th CSE Carnival 2017');
	}

	public function schedule(){

		$events = Time::orderBy('date', 'ASC')->get();
		$dates = DB::table('time')
		            ->select('date')
		            ->groupBy('date')
		            ->get();
		//return $dates;
		return View::make('site.schedule')
					->with('events',$events)
					->with('dates',$dates)
					->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Schedule');
	}
	public function judge(){

		$datas = Judge::orderBy('rank', 'ASC')->get();
		
		return View::make('site.judges')
					->with('datas',$datas)
					->with('title','IPvision SUST 6th CSE Carnival 2017 ::. Honorable Problem Setters and Judges');
	}


}
