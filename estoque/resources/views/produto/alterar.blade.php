@extends('layout.principal')
@section('conteudo')

<h1>Alterar Produto {{$p->nome}}</h1>

<form action="/produtos/alterar/{{$p->id}}" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="" name="nome" class="form-control" value="{{$p->nome}}">
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input type="" name="descricao" class="form-control" value="{{$p->descricao}}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="" name="valor" class="form-control" value="{{$p->valor}}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" value="{{$p->quantidade}}">
	</div>
	<input type="hidden" name="_token" value="{{{csrf_token()}}}">
	<button type="submit" class="btn btn-primary btn-block">
		ALTERAR
	</button>
</form>

@stop
