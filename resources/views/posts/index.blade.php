@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Posts
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">Add Post</a>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($posts as $post)
                                <li class="list-group-item">
                                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
