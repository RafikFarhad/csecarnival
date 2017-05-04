<?php

include 'Mailin.php';

class EmailController extends \BaseController {


	//test
	public function test(){

		$mailin = new Mailin('support@csecarnival.com', '14q0SPjRyHTMbUW2');

		$mailin->
		addTo('rafikfarhad@gmail.com', 'CSE Carnival')->
		
		setFrom('support@csecarnival.com', 'CSE Carnival')->

		setReplyTo('support@csecarnival.com','CSE Carnival')->

		setSubject('CSE Carnival 2017')->

		setText('Hello World!')->

		setHtml('<strong>Hello Farhad!</strong>');

		$res = $mailin->send();
		return $res;


	}
}