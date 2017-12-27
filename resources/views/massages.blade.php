@extends('layouts.page')

@section('content')
		<h1>Messages</h1>
		@if(count($massage) > 0)

			@foreach($massage as $messages)

			<ul class="list-group">
				<li class="list-group-item">Name: {{ $messages->name }}</li>
				<li class="list-group-item">E-mail: {{ $messages->mail }}</li>
				<li class="list-group-item">Message: {{ $messages->massage }}</li>
			</ul>
			@endforeach

		@endif

@endsection

@section('sidebar')

	@parent
	<p>This is the append sidebar content </p>



@endsection
	