<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')

<form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <textarea name="content" rows="3" required></textarea>
    <button type="submit">Add Comment</button>
</form>

    <div class="container">
        <h1>{{ $post->title }}</h1>
        @if ($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" width="200">
        @endif
        <p>{{ $post->content }}</p>

        @if ($post->user_id === Auth::id())
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
        @endif
    </div>

    @foreach($post->comments as $comment)
    <div>
        <p>{{ $comment->content }}</p>
        @can('delete', $comment)
            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endcan
    </div>
@endforeach


<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
@if($post->thumbnail)
    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail">
@endif

<!-- Display tags -->
<p>
    Tags:
    @foreach($post->tags as $tag)
        <span>{{ $tag->title }}</span>
    @endforeach
</p>

@endsection
