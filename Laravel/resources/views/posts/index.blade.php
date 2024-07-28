<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
        <ul class="list-group mt-3">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <h5><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h5>
                    @if ($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" width="100">
                    @endif
                    <p>{{ Str::limit($post->content, 150) }}</p>
                </li>
            @endforeach
        </ul>
    </div>

    <form action="{{ route('posts.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search posts" required>
    <button type="submit">Search</button>
</form>

@endsection
