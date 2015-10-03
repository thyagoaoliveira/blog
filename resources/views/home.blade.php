@extends('/template')

@section('titulo')
	Laravel
@endsection

@section('conteudo')
	@foreach($posts as $post)
		<div class="post-preview">
        <a href="">
            <h2 class="post-title">
            	{{ $post['titulo'] }}
            </h2>
             <h3 class="post-subtitle">
                {{ $post['subtitulo'] }}
            </h3>
        </a>
            <p class="post-meta">Postado por <a href="#">{{ $post['postado'] }}</a> em {{ $post['data'] }}</p>
    	</div>
    	<hr>
	@endforeach
@endsection