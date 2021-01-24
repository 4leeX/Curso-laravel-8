@extends('admin.layouts.app')

@section('title', 'Listagem dos posts')

@section('content')

    <h1>Posts</h1>

    <form action="{{ route("posts.search") }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="submit">Pesquisar</button>
    </form>

    <hr>
    @if (session('success'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    @foreach ($posts as $post)
        <p>
            <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" style="max-width: 100px;">
            {{ $post->title }} 
            [<a href="{{ route('posts.show', $post->id)}}">Ver</a> |
            <a href="{{ route('posts.edit', $post->id)}}">Editar</a>]
        </p>
    @endforeach

    <hr>

    <a href="{{ route('posts.create') }}">Criar Novo Post</a>

    <hr>

    @if (isset($filters))
        {{ $posts->appends($filters)->links() }}
    @else
        {{ $posts->links() }}
    @endif

@endsection