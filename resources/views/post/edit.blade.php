@extends('layouts.app')
@section('title','Actualizando un nuevo articulo')
@section('content')
	<div class="container">
		<div class="col-md-8 offset-2">
			{!!Form::open(['route'=>['post.update',$post],'method'=>'PUT'])!!}
			<div class="card">
				<div class="card-header bg-dark text-white">
					Actualizando Artículos, hasta el momento tienes {{$post_count}} Artículos
				</div>
				<div class="card-body">
					{!!Field::text('title',$post->title,['required'])!!}
					{!!Field::textarea('description',$post->description,['required'])!!}
					{!!Field::select('category_id',$categories,$post->category_id,['required','empty'=>'---'])!!}
				</div>
				<div class="card-footer">
					{!!Form::submit('ACTUALIZAR',['class'=>'btn btn-primary btn-block'])!!}
				</div>
			</div>
			{!!Form::close()!!}
		</div>
	</dir>

@endsection
