@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', $post->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="content" name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select id="tags" name="tags[]" class="form-control" multiple required>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
