extends('layouts.app')

@section('content')
		<h1>Messages</h1>
		@if(count($massages) > 0)

			@foreach($massages as $messages)

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
	