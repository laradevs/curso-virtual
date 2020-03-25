@extends('layouts.app')
@section('title','Categorias')
@section('content')
	<div class="container">
		@include('category._header_table')
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Imagen</th>
		      <th scope="col">Nombres</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse($items as $item)
			    <tr>
			      <th scope="row">{{$item->id}}</th>
			      <td>{{$item->cover}}</td>
			      <td>{{$item->name}}</td>
			      <td>
			      	{!!Form::open(['method'=>'DELETE','route'=>['category.destroy',$item]])!!}
			      		<a href="{{route('category.edit',$item)}}" class="btn btn-primary btn-sm">Editar</a>
			      		{!!Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])!!}
			      	{!!Form::close()!!}
			      </td>
			    </tr>
			@empty
				<tr><td colspan="4">No hay registros ingresados</td></tr>
		    @endforelse
		  </tbody>
		</table>
		{!! $items->appends(['filter'=>request()->get('filter')])->render() 
		!!}
	</div>
@endsection


