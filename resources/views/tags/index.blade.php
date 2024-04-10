@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tags
                        <a href="{{ route('tags.create') }}" class="btn btn-primary btn-sm float-right">Add Tag</a>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($tags as $tag)
                                <li class="list-group-item">
                                    {{ $tag->name }}
                                    <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="float-right">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-sm float-right mr-2">Edit</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
