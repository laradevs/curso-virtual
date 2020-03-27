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
		        <th scope="col">Artículos</th>

		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse($items as $item)
			    <tr>
			      <th scope="row">{{$item->id}}</th>
			      <td>
			      	<img class="img-thumbnail" width="130px" src="{{$item->image_url}}"/>
			      </td>
			      <td>{{$item->name}}</td>
			      <td>{{$item->posts_count}}</td>
			      <td>
			      	{!!Form::open(['method'=>'DELETE','route'=>['category.destroy',$item]])!!}
			      		@can('edit-category')
			      			<a href="{{route('category.edit',$item)}}" class="btn btn-primary btn-sm">Editar</a>
			      		@endcan
			      		
			      		@can('delete-category')
			      			{!!Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])!!}
			      		@endcan
			      	
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


