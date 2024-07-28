<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail (optional)</label>
                <input type="file" id="thumbnail" name="thumbnail" class="form-control">
                @if ($post->thumbnail)
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" width="100" class="mt-2">
                @endif
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>


    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
    <input type="file" name="thumbnail">
    <textarea name="content" required>{{ old('content', $post->content) }}</textarea>

    <!-- Add tags -->
    <select name="tags[]" multiple>
        @foreach(\App\Models\Tag::all() as $tag)
            <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->title }}</option>
        @endforeach
    </select>

    <button type="submit">Update Post</button>
</form>

@endsection
