@extends('layout.principal')
@section('conteudo')

<h1>Novo Produto</h1>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="/produtos/adiciona" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="" name="nome" class="form-control" value="{{old('nome')}}">
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input type="" name="descricao" class="form-control" value="{{old('descricao')}}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="" name="valor" class="form-control" value="{{old('valor')}}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" value="{{old('quantidade')}}">
	</div>
	<input type="hidden" name="_token" value="{{{csrf_token()}}}">
	<button type="submit" class="btn btn-primary btn-block">
		ADICIONAR
	</button>
</form>

@stop
