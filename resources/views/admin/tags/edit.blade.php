@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Tag: {{ $tag->name }}
    </div>

    <div class="card-body">
        <form action="{{ route('tag.update', ['tag' => $tag->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{ $tag->name }}" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Update Tag</button>
            </div>
        </form>
    </div>
</div>


@endsection