<div class="row">
	<div class="col-md-7">
		<a href="{{route('category.create')}}" 
			class="btn btn-primary btn-sm" >CREAR</a>
	</div>
	<div class="col-md-5">
		{!!Form::open(['route'=>'category.index','method'=>'GET'])!!}
			{!!Form::text('filter',request()->get('filter'),['class'=>'form-control'])!!}
		{!!Form::close()!!}
	</div>
</div>

<hr/>