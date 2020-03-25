@extends('layouts.app')
@section('title','Categorias')
@section('content')
	<div class="container">
		<a href="{{route('category.index')}}" class="btn btn-danger btn-sm">Regresar</a>
		<hr/>
		{!! Form::open(['route'=>['category.update',$category],'files'=>true,'method'=>'PUT']) !!}

			{!!Field::text('name',$category->name,['required'=>true])!!}
			{!!Field::textarea('description',$category->description,['rows'=>3,'required'=>true])!!}
			{!!Field::file('cover')!!}

			{!! Form::submit('GRABAR',['class'=>'btn btn-primary']) !!}
		
		{!! Form::close() !!}
	</div>
@endsection