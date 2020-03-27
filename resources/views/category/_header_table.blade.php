<div class="row">
	<div class="col-md-7">
		@can('create-category')
		<a href="{{route('category.create')}}" 
			class="btn btn-primary btn-sm" >CREAR</a>
		@endcan
	</div>
	<div class="col-md-5">
		{!!Form::open(['route'=>'category.index','method'=>'GET'])!!}
			{!!Form::text('filter',request()->get('filter'),['class'=>'form-control'])!!}
		{!!Form::close()!!}
	</div>
</div>

<hr/>