@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">Bienvenido al Sistema</div>

                <div class="card-body">

                   <a href="{{route('post.create')}}" class="btn btn-primary">Crear Artículo</a>
                   &nbsp;
                   Tienes {{ $posts->count()}} Artículos creados
                </div>
            </div>
            <hr/>

               @foreach($posts as $post) 
                <div class="media">
                      <img width="110px" src="{{$post->category->image_url}}" class="align-self-start mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0">
                            {!!Form::open(['method'=>'DELETE','route'=>['post.destroy',$post]])!!}
                            <a href="{{route('post.show',$post)}}">{{$post->title}}</a> 
                            <a class="btn btn-primary btn-sm" href="{{route('post.edit',$post)}}" >
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            {!!Form::close()!!}

                        </h5>
                        <p>Para ver el contenido da click sobre el titulo</p>
                        <div style="text-align: right;">
                            <span>{{$post->created_at->diffForHumans()}}</span>
                        </div>
                      </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
