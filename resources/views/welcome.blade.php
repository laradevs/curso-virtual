@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
    <div class="row">
       @foreach($categories as $item)
        <div class="col-md-4">
            <div class="card mb">
              <img class="card-img-top" height="180px" src="{{$item->image_url}}" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{!!$item->description!!}</p>
                <a href="{{route('view_posts_category',$item)}}" class="btn btn-primary mb">Ver {{$item->posts_count}} Árticulos</a>
              </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
    </div>
</div>
@endsection
