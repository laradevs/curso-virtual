@extends('layouts.app')
@section('title','Artículo')
@section('content')
	<div class="container">
		<div class="col-md-8 offset-2">
			<div class="jumbotron">
			  <h1 class="display-4">{{$post->title}}</h1>
			  <p class="lead">{!!$post->description!!}</p>
			  <a class="btn btn-primary btn-lg" href="/" role="button">Regresar</a>
			</div>
		</div>
	</div>
@endsection