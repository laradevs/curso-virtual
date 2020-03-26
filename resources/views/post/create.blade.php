@extends('layouts.app')
@section('title','Creando un nuevo articulo')
@section('content')
	<div class="container">
		<div class="col-md-8 offset-2">
			{!!Form::open(['route'=>'post.store'])!!}
			<div class="card">
				<div class="card-header bg-dark text-white">
					Creando Artículos, hasta el momento tienes {{$post_count}} Artículos
				</div>
				<div class="card-body">
					{!!Field::text('title',['required'])!!}
					{!!Field::textarea('description',['required'])!!}
					{!!Field::select('category_id',$categories,['required','empty'=>'---'])!!}
				</div>
				<div class="card-footer">
					{!!Form::submit('PUBLICAR',['class'=>'btn btn-primary btn-block'])!!}
				</div>
			</div>
			{!!Form::close()!!}
		</div>
	</dir>

@endsection
