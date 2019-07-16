@extends('layouts.app')


@section('title')
Todo: {{$todo->name}}
@endsection



@section('content')

<h2 class="text-center my-5"> {{$todo->name}}</h2>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-dafault">
            <div class="card-header">
                Details
            </div>

            <div class="card-body">
                {{ $todo->description }}
            </div>
            <div class="row justify-content-center">
                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-secondary btn-sm mx-2">Edit</a>
                <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection