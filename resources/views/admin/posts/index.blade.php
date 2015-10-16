@extends('template')

@section('titulo')
	Laravel - Admin
@endsection

@section('conteudo')
	<table class='table'>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Ação</th>
		</tr>

		@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->titulo }}</td>
				<td>teste</td>
			</tr>
		@endforeach
	</table>
	{!! $posts->render() !!}
@endsection