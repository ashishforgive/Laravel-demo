@extends('layouts.page')

@section('content')

		<h1>Contact Us</h1>

		{!! Form::open(['url' => 'contact/submit']) !!}

			<div class="form-group">

			{{ Form::label('name', 'Name') }}
			
			{{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name']) }}
			</div>

			<div class="form-group">

			{{ Form::label('mail', 'E-Mail Address') }}

			{{ Form::text('mail', '', ['class' => 'form-control', 'placeholder' => 'Enter your email']) }}
			</div>

			<div class="form-group">

			{{ Form::label('massage', 'Massage') }}

			{{ Form::textarea('massage', '', ['class' => 'form-control', 'placeholder' => 'Enter your massage']) }}
			</div>
			<div>
				{{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
			</div>
    	

		{!! Form::close() !!}
		
@endsection
