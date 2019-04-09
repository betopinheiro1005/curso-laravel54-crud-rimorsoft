@extends('layout')

@section('content')
		<div class="col-sm-8">
			<h2>
				Novo produto
				<a href="{{ route('products.create') }}" class="btn btn-primary float-right">Listagem</a>
			</h2>
			@include('products.fragment.error')
			{!! Form::open( ['route' => 'products.store']) !!}
			@include('products.fragment.form')
			{!! Form::close() !!}
		</div>
		<div class="col-sm-4">
			@include('products.fragment.aside')
		</div>
@endsection