@extends('layouts.default')
@section('content')
@include('includes.alert')
<div class="container">


{{ Form::open(array('url' => 'admin/dashboard/pages/')) }}


	<select class="btn btn-default dropdown-toggle" aria-expanded="false"  id="option1" name="do" onchange="this.form.submit()"  >
		<option value="0"> Choose a page </option>
		<option value="1"> Programming Contest </option>
		<option value="2"> Software Contest </option>
		<option value="3"> Project Showcasing </option>
		<option value="4"> Robotics Competition</option>
		<option value="5"> Game </option>
		<option value="6"> Contact </option>
		<option value="7"> Events Page </option>
		<option value="8"> Sponsor Page </option>
	</select>
</form>


	<div class="row">


		@foreach($datas as $data)
		<h1>{{$data->title}}</h1>

		<div style="width: 100%; margin-bottom: 10px;margin-top: 10px">
			{{ Form::open(array('url' => 'admin/dashboard/pages/update', 'files' => true)) }}
			
			<img style="width: 100%; margin-bottom: 10px;" src="{{asset('carnival_assets/banners/'.$data->banner)}}">

			{{-- <div style="width: 160px;"> --}}
			<input type="file" name="banner" id="banner" style="margin: 20px;" />
			{{-- <label for="coach_photo"> <span>Change Banner</span></label> --}}
			{{-- </div> --}}
			<h5>Title</h5>
			<input size="82" type="text" name="title" value="{{$data->title}}"> <br>

			<?php

			$date = explode("*", $data->dates);
			if(sizeof($date)<6) $date = ['null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'];
			?>
			<h5>Registration Start</h5>
			<input type="text" name="date0" value="{{$date[0]}}"><br>
			<h5>Registration Close</h5>
			<input type="text" name="date1" value="{{$date[1]}}"><br>
			<h5> Team List will be published</h5>
			<input type="text" name="date2" value="{{$date[2]}}"><br>
			<h5>Payment Deadline</h5>
			<input type="text" name="date3" value="{{$date[3]}}"><br>
			<h5>Final Contest</h5>
			<input type="text" name="date4" value="{{$date[4]}}"><br>
			<input  type="hidden" name="rid" value="{{$data->id}}">

			<hr>
			<label> <strong> Description </strong> </label>

			<textarea name="description" id="editor1">
				{{$data->description}}"
			</textarea>
			<br>
			<button type="submit" class="btn btn-primary">
				Update {{$data->title}}
			</button>
		</form>
	</div>
	@endforeach

</div>
</div>

@stop