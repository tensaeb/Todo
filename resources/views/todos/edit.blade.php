@extends('layouts.app')

@section('title')
Create Todo
@endsection

@section('content')

<h1 class="text-center my-5"> Update Todos </h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-dafault">
            <div class="card-header ">
                Edit Todo
            </div>

            <div class="card-body">

            @if($errors->any())
            <div class="aler alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                    <li class="list-group-item">
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>

            @endif
                <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $todo->name }}" >
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" cols="5" rows="5" placeholder="Description">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Update Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection