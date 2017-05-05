<?php



class DashboardController extends \BaseController {


	//test
	public function index(){

		return View::make('dashboard')
					->with('title','Dashboard');


	}
	public function make_pc(){

		$teams = Registration::where('contest','=', 'pc')->orderBy('university', 'ASC')->get();

		return View::make('dashboard_pc')
					->with('teams',$teams)
					->with('title','Dashboard');
	}

	public function listen_pc(){

		$data = Input::all();
		// return $data;
		DB::table('registration')
            ->where('id', $data['id'])
            ->update(array('status' => $data['status']));
		$teams = Registration::where('contest','=', 'pc')->orderBy('university', 'ASC')->get();
		return View::make('dashboard_pc')
					->with('teams',$teams)
					->with('title','Dashboard');

	}
	public function make_sc(){

		$teams = Registration::where('contest','=', 'sc')->orderBy('university', 'ASC')->get();

		return View::make('dashboard_pc')
					->with('teams',$teams)
					->with('title','Dashboard');
	}

	public function listen_sc(){

		$data = Input::all();
		// return $data;
		DB::table('registration')
            ->where('id', $data['id'])
            ->update(array('status' => $data['status']));
		$teams = Registration::where('contest','=', 'sc')->orderBy('university', 'ASC')->get();
		return View::make('dashboard_pc')
					->with('teams',$teams)
					->with('title','Dashboard');

	}


}