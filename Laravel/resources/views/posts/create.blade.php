<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail (optional)</label>
                <input type="file" id="thumbnail" name="thumbnail" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>


    
@endsection
