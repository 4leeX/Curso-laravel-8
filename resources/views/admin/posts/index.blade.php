<h1>Posts</h1>

<hr>
@if (session('success'))
    <div>
        {{ session('message') }}
    </div>
@endif

@foreach ($posts as $post)
    <p>
        {{ $post->title }} 
        [<a href="{{ route('posts.show', $post->id)}}">Ver</a> |
        <a href="{{ route('posts.edit', $post->id)}}">Editar</a>]
    </p>
@endforeach

<hr>

<a href="{{ route('posts.create') }}">Criar Novo Post</a>

<hr>

{{ $posts->links() }}