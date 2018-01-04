@extends('layouts.page')

@section('content')
		<h1>Home</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<h1> Products List</h1>
		<div id="products" class="row list-group">
			<div class="item  col-xs-12 col-md-6 col-lg-4">
	            <div class="thumbnail">
	            	<div class="hovereffect">
			                <img class="group list-group-image img-responsive" src="{{ asset('images/fff.png') }}" alt="" />
			                <div class="overlay">
			                	@if(count($myproduct) > 0)

									@foreach($myproduct as $p)
						                <p class="group inner list-group-item-text">
						                        {{ $p->desc }}
						                </p>
				               	 	@endforeach

								@endif
				            </div>           
	                 </div>
	                <div class="caption">
	                		@foreach($myproduct as $p)
	                    		<h4 class="group inner list-group-item-heading">{{ $p->title }}</h4>
	                    	@endforeach	
	                    <div class="row">
	                        <div class="col-xs-12 col-md-6">
	                            <p class="lead">
	                                $21.000</p>
	                        </div>
	                        <div class="col-xs-12 col-md-6">
	                            <a class="btn btn-success" href="#">Add to cart</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="item  col-xs-12 col-md-6 col-lg-4">
	            <div class="thumbnail">
	            	<div class="hovereffect">
			                <img class="group list-group-image img-responsive" src="{{ asset('images/fff.png') }}" alt="" />
			                <div class="overlay">
			                	@if(count($myproduct) > 0)

									@foreach($myproduct as $p)
						                <p class="group inner list-group-item-text">
						                        {{ $p->desc }}
						                </p>
				               	 	@endforeach

								@endif
				            </div>           
	                 </div>
	                <div class="caption">
	                		@foreach($myproduct as $p)
	                    		<h4 class="group inner list-group-item-heading">{{ $p->title }}</h4>
	                    	@endforeach	
	                    <div class="row">
	                        <div class="col-xs-12 col-md-6">
	                            <p class="lead">
	                                $21.000</p>
	                        </div>
	                        <div class="col-xs-12 col-md-6">
	                            <a class="btn btn-success" href="#">Add to cart</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="item  col-xs-12 col-md-6 col-lg-4">
	            <div class="thumbnail">
	            	<div class="hovereffect">
			                <img class="group list-group-image img-responsive" src="{{ asset('images/fff.png') }}" alt="" />
			                <div class="overlay">
			                	@if(count($myproduct) > 0)

									@foreach($myproduct as $p)
						                <p class="group inner list-group-item-text">
						                        {{ $p->desc }}
						                </p>
				               	 	@endforeach

								@endif
				            </div>           
	                 </div>
	                <div class="caption">
	                		@foreach($myproduct as $p)
	                    		<h4 class="group inner list-group-item-heading">{{ $p->title }}</h4>
	                    	@endforeach	
	                    <div class="row">
	                        <div class="col-xs-12 col-md-6">
	                            <p class="lead">
	                                $21.000</p>
	                        </div>
	                        <div class="col-xs-12 col-md-6">
	                            <a class="btn btn-success" href="#">Add to cart</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>

@endsection

@section('sidebar')

	@parent
	<p>This is the append sidebar content </p>



@endsection
	
