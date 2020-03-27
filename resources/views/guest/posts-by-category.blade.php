@extends('layouts.app')
@section('title',$category->name)
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<img src="{{$category->image_url}}" height="180px" />
				<h2>{{$category->name}}</h2>
				<hr/>
				<span>{!! $category->description !!}</span>
				<br/>
				<span>Creada: {{$category->created_at->diffForHumans()}}</span>
				<br>
				<a href="/" class="btn btn-danger btn-block">REGRESAR</a>
			</div>
			<div class="col-md-8">
				{!! $posts->render()!!}
				<hr/>
				@forelse($posts as $post)

					<div class="card">
						<div class="card-body">
							<h4><a href="{{route('view_post',$post)}}">{{$post->title}}</a></h4>
							Creado por: {{$post->user->name}} - Fecha: {{$post->created_at->format('d/m/Y H:i')}}
						</div>
					</div>

				@empty
					<div class="alert alert-danger">
						No hay artículos publicados 
					</div>
				@endforelse
			</div>
		</div>
	</div>
@endsection