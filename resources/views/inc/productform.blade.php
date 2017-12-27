<h3>Add Product detials</h3>

		{!! Form::open(['url' => 'home/add', 'files'=>true, 'action' => 'public/uploads']) !!} 
			<div class="form-group">

			{{ Form::label('title', 'Title') }}
			
			{{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Product title']) }}
			</div>

			<div class="form-group">

			{{ Form::label('desc', 'Description') }}

			{{ Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Enter Product Descriptions..']) }}
			</div>

			<div class="form-group">

			{{ Form::label('image', 'Uploade product imgae') }}

			{{ Form::file('image') }}
			</div>
			<div>
				{{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
			</div>