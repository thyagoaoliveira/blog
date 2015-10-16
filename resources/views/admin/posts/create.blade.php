@extends('template')

@section('titulo')
	Laravel - Novo Post
@endsection

@section('conteudo')
	{!! Form::open(['method'=>'post']) !!}
		
		<div class="form-group">
			{!! Form::label('title', 'Titulo:') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('conteudo', 'Conteúdo:') !!}
			{!! Form::textarea('conteudo', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('postado', 'Autor:') !!}
			{!! Form::text('postado', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Criar', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection