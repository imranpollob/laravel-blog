@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Update Category: {{ $category->name }}</h1>
        </div>

        <div class="panel-body">
            <form action="{{ route('category.update', ['id'=>$category->id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@stop