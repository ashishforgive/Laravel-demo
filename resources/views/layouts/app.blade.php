<!DOCTYPE html>
<html>
	<head>

		<title>Demo-Laravel</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">

	</head>

	<body>
		@include('inc.header')

		<div class="container">
		  @if(Request::is('/'))

			@include('inc.showcase')

		  @endif;	
			<div class="row">

				<div class="col-md-8 col-lg-8">

					@include('inc.massages')
					
					@yield('content')

				</div>

				<div class="col-md-4 col-lg-4">

					@include('inc.sidebar')

				</div>
			</div>
		</div> 
		<footer>
			@include('inc.footer')
		</footer>   	
	</body>
</html>