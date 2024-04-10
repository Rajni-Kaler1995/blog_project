@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Tag</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tags.update', $tag->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $tag->name }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Tag</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
