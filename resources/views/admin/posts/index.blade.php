<h1>Posts</h1>

<hr>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach

<hr>

<a href="{{ route('posts.create') }}">Criar Novo Post</a>