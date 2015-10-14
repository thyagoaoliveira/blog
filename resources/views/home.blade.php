@extends('/template')

@section('titulo')
	Laravel
@endsection

{{-- 
# Bloco para funcionar com array
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
@endsection --}}

@section('conteudo')
    @foreach($posts as $post)
        <div class="post-preview">
        
        <a href="">
            <h2 class="post-title">
                {{ $post->titulo }}
            </h2>
             <h3 class="post-subtitle">
                {{ $post->conteudo }}
            </h3>
        </a>
        
        <p class="post-meta">Postado por <a href="#">{{ $post->postado }}</a> em {{ $post->created_at }}</p>
        
        <h4 class="post-subtitle">TAG's</h4>

        <ul>
            @foreach($post->tag as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>        

        <h3 class="post-subtitle">Comentários</h3>

        @foreach($post->comentario as $comment)
            >>> {{ $comment->comentario }}
            <p class="post-meta">por {{ $comment->nome }}</p>
        @endforeach

        </div>
        <hr>
    @endforeach
@endsection